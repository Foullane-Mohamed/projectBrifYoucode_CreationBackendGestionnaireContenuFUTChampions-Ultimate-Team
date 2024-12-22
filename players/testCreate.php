<?php
require_once '../config/db.php';
require_once '../includes/utils.php';

$error_message = '';
$success_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = db_connect();

  $nom = validate_input($_POST['name'], 'string');
  $photo = validate_input($_POST['photo'], 'string');
  $nationality = validate_input($_POST['nationality'], 'string');
  $club = validate_input($_POST['club'], 'string');
  $flag = validate_input($_POST['flag'], 'string');
  $logo = validate_input($_POST['logo'], 'string');
  $position = validate_input($_POST['position'], 'string');
  $rating = validate_input($_POST['rating'], 'int');
  $diving = validate_input($_POST['diving'], 'int');
  $handling = validate_input($_POST['handling'], 'int');
  $kicking = validate_input($_POST['kicking'], 'int');
  $reflexes = validate_input($_POST['reflexes'], 'int');
  $speed = validate_input($_POST['speed'], 'int');
  $positioning = validate_input($_POST['positioning'], 'int');
  $shooting = validate_input($_POST['shooting'], 'int');
  $pace = validate_input($_POST['pace'], 'int');
  $dribbling = validate_input($_POST['dribbling'], 'int');
  $defending = validate_input($_POST['defending'], 'int');
  $physical = validate_input($_POST['physical'], 'int');
  $passing = validate_input($_POST['passing'], 'int');


  if ($nom && $photo && $nationality && $club && $flag && $logo && $position && $rating !== false) {
    $query = "INSERT INTO players (nom, photo, nationality, club, flag, logo, position, rating, diving, handling, kicking, reflexes, speed, positioning, shooting, pace, dribbling, defending, physical, passing) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


    $stmt = prepare_sql_query($conn, $query, [
      $nom, $photo, $nationality, $club, $flag, $logo, $position, $rating, 
      $diving, $handling, $kicking, $reflexes, $speed, $positioning, $shooting, 
      $pace, $dribbling, $defending, $physical, $passing
    ]);


    if ($stmt) {
      mysqli_stmt_execute($stmt);

      if (mysqli_stmt_affected_rows($stmt) > 0) {
        $success_message = "Joueur ajouté avec succès !";
      } else {
        $error_message = "Erreur lors de l'ajout du joueur.";
      }

      mysqli_stmt_close($stmt);
    }
  } else {
    $error_message = "Données invalides. Veuillez vérifier vos informations.";
  }

  db_close($conn);
}
?>


<?php
require_once './includes/functions.php';
$players = get_all_players();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="FUT Champions Web App Ultimate Team" />
  <script src="https://cdn.tailwindcss.com"></script>

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <title>Document</title>
</head>

<body>
  <div class="containerr" style="width: 100%">
    <div
      class="dashbord"
      style="width: 100%; height: 100vh; background-color: #dbf1fc">
      <header
        class="bg-gradient-to-r from-[#272626cc] to-green-800 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
          <h1 class="text-2xl font-bold">Dashboard Gestion Players
            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><a href="./src/tiran.html">Show Tiran</a></button>

          </h1>

          <button
            type="button"
            class="showForm text-white bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out font-semibold rounded-full text-sm px-6 py-2.5 text-center me-2 mb-2">
            Show Form
          </button>

        </div>
      </header>


      <main class="container mx-auto p-6">
        <div class="overflow-x-auto">
          <table class="table-auto w-full border-collapse">
            <thead>
              <tr class="bg-blue-600 text-white">
                <th class="p-2">#</th>
                <th class="p-2">Name</th>
                <th class="p-2">Position</th>
                <th class="p-2">Rating</th>
                <th class="p-2">Club</th>
                <th class="p-2">Actions</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach ($players as $player): ?>
                <tr
                  class="bg-gray-800 hover:bg-gray-700 border-b text-white border-gray-700">
                  <td class="p-2 text-center"><?= $player['player_id'] ?></td>
                  <td class="p-2 text-center"><?= htmlspecialchars($player['player_name']) ?></td>
                  <td class="p-2 text-center"><?= htmlspecialchars($player['player_position']) ?></td>
                  <td class="p-2 text-center"><?= htmlspecialchars($player['player_rating']) ?></td>
                  <td class="p-2 text-center"><?= htmlspecialchars($player['player_club']) ?></td>
                  <td class="p-2 flex justify-center gap-2">
                    <button
                      class="show-info-player bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                    <button
                      class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                      <i class="fas fa-pen font-xxl text-xl"></i>
                    </button>
                    <button
                      class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>
    <div class="fromData" style="display: none; width: 30%; margin: auto">
      <div
        style="position: absolute; top: 0px"
        class="bg-[#171818c6] p-8 rounded-lg shadow-lg w-full max-w-3xl">
        <form action="dashboard.php" method="post">
          <div class="mb-4">
            <label class="block text-white font-bold mb-2">Nom:</label>
            <input
              type="text"
              name="name"
              class="input-nom w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
            <span class="error-nom text-[#ae3333] text-xl font-medium"></span>
          </div>
          <div class="mb-4">
            <label class="block text-white font-bold mb-2">Photo:</label>
            <input
              class="input-photo block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:border-green-500"
              aria-describedby="file_input_help"
              id="file_input"
              name="photo"
              type="file" />
            <span
              class="error-photo text-[#ae3333] text-xl font-medium"></span>
          </div>
          <div class="mb-4">
            <label class="block text-white font-bold mb-2">Nationality:</label>
            <input
              type="url"
              name="nationality"
              class="input-nationality w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
            <span
              class="error-nationality text-[#ae3333] text-xl font-medium"></span>
          </div>
          <div class="mb-4">
            <label class="block text-white font-bold mb-2">Club:</label>
            <input
              type="text"
              name="club"
              class="input-club w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
            <span
              class="error-club text-[#ae3333] text-xl font-medium"></span>
          </div>
          <div class="mb-4">
            <label class="block text-white font-bold mb-2">flag du Nationalité:</label>
            <input
              class="input-flag-nationalite block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:border-green-500"
              aria-describedby="file_input_help"
              id="file_input"
              name="flag"
              type="file" />
            <span
              class="error-flagNationalite text-[#ae3333] text-xl font-medium"></span>
          </div>
          <div class="mb-4">
            <label class="block text-white font-bold mb-2">Logo du club:</label>
            <input
              class="input-logo-club block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:border-green-500"
              aria-describedby="file_input_help"
              id="file_input"
              name="logo"
              type="file" />
            <span
              class="error-logoClub text-[#ae3333] text-xl font-medium"></span>
          </div>
          <div class="flex flex-col mb-4 mt-4">
            <label for="position" class="text-white font-bold">Position:</label>
            <select
              name="position"
              class="select-position w-full mt-3 p-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
              <option selected>Choisi votre position</option>
              <option value="GK">GK</option>
              <option value="CM">CM</option>
              <option value="CB">CB</option>
              <option value="LB">LB</option>
              <option value="RB">RB</option>
              <option value="LW">LW</option>
              <option value="CDM">CDM</option>
              <option value="ST">ST</option>
              <option value="RW">RW</option>
            </select>
            <span
              class="error-position text-[#ae3333] text-xl font-medium"></span>
          </div>
          <div class="mb-4">
            <label class="block text-white font-bold mb-2">Rating</label>
            <input
              type="number"
              name="rating"
              class="input-rating w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
            <span
              class="error-rating text-[#ae3333] text-xl font-medium"></span>
          </div>

          <div class="player-gk columns-2">
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Diving</label>
              <input
                type="number"
                name="diving"
                class="input-diving w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
              <span
                class="error-diving text-[#ae3333] text-xl font-medium"></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Handling</label>
              <input
                type="number"
                name="handling"
                class="input-handling w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
              <span
                class="error-handling text-[#ae3333] text-xl font-medium"></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Kicking</label>
              <input
                type="number"
                name="kicking"
                class="input-kicking w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
              <span
                class="error-kicking text-[#ae3333] text-xl font-medium"></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Reflexes</label>
              <input
                type="number"
                name="reflexes"
                class="input-reflexes w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
              <span
                class="error-reflexes text-[#ae3333] text-xl font-medium"></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Speed</label>
              <input
                type="number"
                name="speed"
                class="input-speed w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
              <span
                class="error-speed text-[#ae3333] text-xl font-medium"></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Positioning</label>
              <input
                type="number"
                name="positioning"
                class="input-positioning w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
              <span
                class="error-positioning text-[#ae3333] text-xl font-medium"></span>
            </div>
          </div>
          <div style="display: none" class="player-cm columns-2">
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Shooting</label>
              <input
                type="number"
                name="shooting"
                class="input-shooting w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
              <span
                class="error-shooting text-[#ae3333] text-xl font-medium"></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Pace</label>
              <input
                type="number"
                name="pace"
                class="input-pace w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
              <span
                class="error-pace text-[#ae3333] text-xl font-medium"></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Dribbling</label>
              <input
                type="number"
                name="dribbling"
                class="input-dribbling w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
              <span
                class="error-dribbling text-[#ae3333] text-xl font-medium"></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Defending</label>
              <input
                type="number"
                name="defending"
                class="input-defending w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
              <span
                class="error-defending text-[#ae3333] text-xl font-medium"></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Physical</label>
              <input
                type="number"
                name="physical"
                class="input-physical w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
              <span
                class="error-physical text-[#ae3333] text-xl font-medium"></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Passing</label>
              <input
                type="number"
                name="passing"
                class="input-passing w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
              <span
                class="error-passing text-[#ae3333] text-xl font-medium"></span>
            </div>
          </div>

          <div class="flex justify-end">
            <button
              type="submit"
              class="btn-enter text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
              Enter
            </button>
          </div>
        </form>
      </div>
    </div>
    <div
      class="card rounded-lg shadow-xl p-1 mx-auto bg-gradient-to-br m-auto from-black -500 via-indigo-500 to-blue-500"
      style="display: none;position: absolute; top: 200px; left: 40%">
      <div
        class="bg-white shadow-lg rounded-lg overflow-hidden text-center w-[500px] m-auto">
        <div class="p-6">
          <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">
            Player Information
          </h2>

          <div class="mb-6">
            <p class="text-gray-700">
              <span class="font-bold">Nom:</span> John Doe
            </p>
          </div>

          <div class="mb-6">
            <p class="text-gray-700">
              <span class="font-bold">Photo:</span>
              <img
                style="margin: auto"
                src="path/to/photo.jpg"
                alt="Player Photo"
                class="w-20 h-20 rounded-full border-4 border-indigo-300 shadow-lg" />
            </p>
          </div>

          <div class="mb-6">
            <p class="text-gray-700">
              <span class="font-bold">Nationality:</span> French
            </p>
          </div>

          <div class="mb-6">
            <p class="text-gray-700">
              <span class="font-bold">Club:</span> Paris Saint-Germain
            </p>
          </div>

          <div style="display: grid; grid-template-columns: auto auto">
            <div class="mb-6">
              <p class="text-gray-700">
                <span class="font-bold">Flag:</span>
                <img
                  style="margin: auto"
                  src="path/to/flag.jpg"
                  alt="Country Flag"
                  class="w-12 h-12 rounded-full border-2 border-gray-200 shadow-lg" />
              </p>
            </div>

            <div class="mb-6">
              <p class="text-gray-700">
                <span class="font-bold">Logo:</span>
                <img
                  style="margin: auto"
                  src="path/to/logo.jpg"
                  alt="Club Logo"
                  class="w-12 h-12 rounded-full border-2 border-gray-200 shadow-lg" />
              </p>
            </div>
            <div class="mb-6">
              <p class="text-gray-700">
                <span class="font-bold">Position:</span> GK
              </p>
            </div>

            <div class="mb-6">
              <p class="text-gray-700">
                <span class="font-bold">Rating:</span> 90
              </p>
            </div>

            <div class="mb-6">
              <p class="text-gray-700">
                <span class="font-bold">Diving:</span> 95
              </p>
            </div>

            <div class="mb-6">
              <p class="text-gray-700">
                <span class="font-bold">Handling:</span> 92
              </p>
            </div>

            <div class="mb-6">
              <p class="text-gray-700">
                <span class="font-bold">Kicking:</span> 85
              </p>
            </div>

            <div class="mb-6">
              <p class="text-gray-700">
                <span class="font-bold">Reflexes:</span> 93
              </p>
            </div>

            <div class="mb-6">
              <p class="text-gray-700">
                <span class="font-bold">Speed:</span> 88
              </p>
            </div>

            <div class="mb-6">
              <p class="text-gray-700">
                <span class="font-bold">Positioning:</span> 90
              </p>
            </div>
          </div>
          <button
            type="button"
            class="hide-info-player bg-yellow-500 text-white  rounded-3xl hover:bg-yellow-600 p-3">
            <i class="fa-regular fa-eye-slash text-3xl"></i>
          </button>


        </div>
      </div>
    </div>
  </div>
  <script src="/src/logique.js"></script>
</body>

</html>