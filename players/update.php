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
      <form action="http://localhost/projectBrifYoucode_CreationBackendGestionnaireContenuFUTChampions-Ultimate-Team/" >


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
      </form>
    </div>
  </div>
</body>

</html>