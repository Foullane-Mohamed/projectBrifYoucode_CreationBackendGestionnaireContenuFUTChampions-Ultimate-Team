<?php
require "../config/db.php";
if (isset($_REQUEST['id'])) {

  // players edite 

  
    $conn = db_connect();
    mysqli_begin_transaction($conn);

    $nom = validate_input($_POST['name'], 'string');
    $photo = validate_input($_POST['photo'], 'string');
    $nationality = validate_input($_POST['nationality'], 'string');
    $club = validate_input($_POST['club'], 'string');
    $flag = validate_input($_POST['flag'], 'string');
    $logo = validate_input($_POST['logo'], 'string');
    $position = validate_input($_POST['position'], 'string');
    $rating = validate_input($_POST['rating'], 'int');

    if ($nom && $photo && $nationality && $club && $flag && $logo && $position && $rating) {
      $query = "UPDATE  players SET name =? , photo_path=?, nationality=?, club=?, flag_path=?, logo_path=?, position=?, rating=? WHERE id= ? ";
                

      $stmt = prepare_sql_query($conn, $query, [
        $nom,
        $photo,
        $nationality,
        $club,
        $flag,
        $logo,
        $position,
        $rating
      ]);

      if ($stmt && mysqli_stmt_execute($stmt)) {
        $player_id = mysqli_insert_id($conn);

        if ($position === 'GK') {
          $diving = validate_input($_POST['diving'], 'int');
          $handling = validate_input($_POST['handling'], 'int');
          $kicking = validate_input($_POST['kicking'], 'int');
          $reflexes = validate_input($_POST['reflexes'], 'int');
          $speed = validate_input($_POST['speed'], 'int');
          $positioning = validate_input($_POST['positioning'], 'int');

          if ($diving && $handling && $kicking && $reflexes && $speed && $positioning) {
            $query = "UPDATE goalkeeper_attributes 
                                SET player_id=?, diving=?, handling=?, kicking=?, reflexes=?, speed=?, positioning=? WHERE id = ?" ;
                                

            $stmt = prepare_sql_query($conn, $query, [
              $player_id,
              $diving,
              $handling,
              $kicking,
              $reflexes,
              $speed,
              $positioning
            ]);
          }
        } else {
          $shooting = validate_input($_POST['shooting'], 'int');
          $pace = validate_input($_POST['pace'], 'int');
          $dribbling = validate_input($_POST['dribbling'], 'int');
          $defending = validate_input($_POST['defending'], 'int');
          $physical = validate_input($_POST['physical'], 'int');
          $passing = validate_input($_POST['passing'], 'int');

          if ($shooting && $pace && $dribbling && $defending && $physical && $passing) {
            $query = "UPDATE outfield_attributes SET player_id=?, shooting=?, pace, dribbling=?, defending=?, physical=?, passing=? WHERE id =?";

            $stmt = prepare_sql_query($conn, $query, [
              $player_id,
              $shooting,
              $pace,
              $dribbling,
              $defending,
              $physical,
              $passing
            ]);
          }
        }

      
      } 
    }

    db_close($conn);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();

  // end players edite 

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/output.css">
  <script src="https://cdn.tailwindcss.com"></script>

  <title>Document</title>
</head>

<body class="bg-yellow-500">
  <div class="fromData" style=" width: 30%; margin: auto">
    <div
      style="position: absolute; top: 0px"
      class="bg-[#171818c6] p-8 rounded-lg shadow-lg w-full max-w-3xl">
      <form class="edit" action="" method="POST">
        <div id="person">

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

          <div class="flex justify-end ">
            <a href="../index.php" class=" bg-yellow-500 text-l text-white px-3 py-1 rounded hover:bg-yellow-600 mr-4 text-center">
              <button
                class="reture_dashbord text-xl text-center">

                Reture To Dashboard

              </button>
            </a>
            <button

              class=" text-white text-l bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:outline-none focus:ring-blue-300 font-medium rounded-lg  px-5 py-2.5 text-center">
              Edite
            </button>
          </div>
        </div>

      </form>
    </div>
  </div>
  <script src="../src/js/update.js"></script>
</body>

</html>