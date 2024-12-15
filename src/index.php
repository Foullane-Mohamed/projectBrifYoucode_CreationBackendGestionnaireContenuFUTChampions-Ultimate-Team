<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="FUT Champions Web App Ultimate Team" />
    <link rel="stylesheet" href="output.css" />
    <link rel="stylesheet" href="./style/style.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
      integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Document</title>
  </head>

  <body>
    <div class="containerr">
      <div class="stad w-[70%] flex items-center justify-center flex-col gap-4">
        <div class="stadDiv w-[70%] h-[70rem] mb-10">
          <div class="player1 plan1 plan-2-1"></div>
          <div class="player2 plan2 plan-2-2"></div>
          <div class="player3 plan3 plan-2-3"></div>
          <div class="player4 plan4 plan-2-4"></div>
          <div class="player5 plan5 plan-2-5"></div>
          <div class="player6 plan6 plan-2-6"></div>
          <div class="player7 plan7 plan-2-7"></div>
          <div class="player8 plan8 plan-2-8"></div>
          <div class="player9 plan9 plan-2-9"></div>
          <div class="player10 plan10 plan-2-10"></div>
          <div class="player11 plan11 plan-2-11"></div>
        </div>
        <div
          id="changement"
          class="changement w-[90%] m-10 p-20 rounded-3xl pt-10 flex flex-wrap items-center justify-center gap-4 bg-[#06380464] min-h-[600px]"
        ></div>
      </div>

      <div
        class="formall w-full max-w-xl mx-auto p-6 rounded-3xl bg-[#083a0457] shadow-md"
      >
        <form>
          <select
            class="select-plan w-full mt-3 p-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
          >
            <option selected>Choisi votre plan</option>
            <option value="premier">4-3-3</option>
            <option value="deuxieme">4-4-2</option>
          </select>
          <div class="mb-4">
            <label class="block text-white font-bold mb-2">Nom:</label>
            <input
              type="text"
              class="input-nom w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
            />
            <span class="error-nom text-[#ae3333] text-xl font-medium"></span>
          </div>
          <div class="mb-4">
            <label class="block text-white font-bold mb-2">Photo:</label>
            <input
              class="input-photo block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:border-green-500"
              aria-describedby="file_input_help"
              id="file_input"
              type="file"
            />
            <span class="error-photo text-[#ae3333] text-xl font-medium"></span>
          </div>
          <div class="mb-4">
            <label class="block text-white font-bold mb-2">Nationality:</label>
            <input
              type="url"
              class="input-nationality w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
            />
            <span
              class="error-nationality text-[#ae3333] text-xl font-medium"
            ></span>
          </div>
          <div class="mb-4">
            <label class="block text-white font-bold mb-2">Club:</label>
            <input
              type="text"
              class="input-club w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
            />
            <span class="error-club text-[#ae3333] text-xl font-medium"></span>
          </div>
          <div class="mb-4">
            <label class="block text-white font-bold mb-2"
              >flag du Nationalité:</label
            >
            <input
              class="input-flag-nationalite block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:border-green-500"
              aria-describedby="file_input_help"
              id="file_input"
              type="file"
            />
            <span
              class="error-flagNationalite text-[#ae3333] text-xl font-medium"
            ></span>
          </div>
          <div class="mb-4">
            <label class="block text-white font-bold mb-2">Logo du club:</label>
            <input
              class="input-logo-club block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:border-green-500"
              aria-describedby="file_input_help"
              id="file_input"
              type="file"
            />
            <span
              class="error-logoClub text-[#ae3333] text-xl font-medium"
            ></span>
          </div>
          <div class="flex flex-col mb-4 mt-4">
            <label for="position" class="text-white font-bold">Position:</label>
            <select
              class="select-position w-full mt-3 p-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
            >
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
              class="error-position text-[#ae3333] text-xl font-medium"
            ></span>
          </div>
          <div class="mb-4">
            <label class="block text-white font-bold mb-2">Rating</label>
            <input
              type="number"
              class="input-rating w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
            />
            <span
              class="error-rating text-[#ae3333] text-xl font-medium"
            ></span>
          </div>

          <div class="player-gk columns-2">
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Diving</label>
              <input
                type="number"
                class="input-diving w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
              />
              <span
                class="error-diving text-[#ae3333] text-xl font-medium"
              ></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Handling</label>
              <input
                type="number"
                class="input-handling w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
              />
              <span
                class="error-handling text-[#ae3333] text-xl font-medium"
              ></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Kicking</label>
              <input
                type="number"
                class="input-kicking w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
              />
              <span
                class="error-kicking text-[#ae3333] text-xl font-medium"
              ></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Reflexes</label>
              <input
                type="number"
                class="input-reflexes w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
              />
              <span
                class="error-reflexes text-[#ae3333] text-xl font-medium"
              ></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Speed</label>
              <input
                type="number"
                class="input-speed w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
              />
              <span
                class="error-speed text-[#ae3333] text-xl font-medium"
              ></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Positioning</label>
              <input
                type="number"
                class="input-positioning w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
              />
              <span
                class="error-positioning text-[#ae3333] text-xl font-medium"
              ></span>
            </div>
          </div>
          <div style="display: none" class="player-cm columns-2">
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Shooting</label>
              <input
                type="number"
                class="input-shooting w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
              />
              <span
                class="error-shooting text-[#ae3333] text-xl font-medium"
              ></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Pace</label>
              <input
                type="number"
                class="input-pace w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
              />
              <span
                class="error-pace text-[#ae3333] text-xl font-medium"
              ></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Dribbling</label>
              <input
                type="number"
                class="input-dribbling w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
              />
              <span
                class="error-dribbling text-[#ae3333] text-xl font-medium"
              ></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Defending</label>
              <input
                type="number"
                class="input-defending w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
              />
              <span
                class="error-defending text-[#ae3333] text-xl font-medium"
              ></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Physical</label>
              <input
                type="number"
                class="input-physical w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
              />
              <span
                class="error-physical text-[#ae3333] text-xl font-medium"
              ></span>
            </div>
            <div class="mb-4">
              <label class="block text-white font-bold mb-2">Passing</label>
              <input
                type="number"
                class="input-passing w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
              />
              <span
                class="error-passing text-[#ae3333] text-xl font-medium"
              ></span>
            </div>
          </div>

          <div class="flex justify-end">
            <button
              type="button"
              class="btn-enter text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            >
              Enter
            </button>
          </div>
        </form>
      </div>
    </div>
    <h1 class="title text-[2rem] font-bold bg-[#ffffff4a] p-10 rounded-3xl">
      FUT Champions Web App Ultimate Team
    </h1>

    <script src="./js/main.js"></script>
  </body>
</html>
