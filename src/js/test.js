
const player1 = {
    name: "Mbappe",
    club: "PSG",
    league: "Ligue 1",
    nationality: "France"
};

const player2 = {
    name: "Dembele",
    club: "PSG",
    league: "Ligue 1",
    nationality: "France"
};











function shimique(){
  const count=0;
  const player1 = {
    name: "Mbappe",
    club: "PSG",
    league: "Ligue 1",
    nationality: "France"
};

const player2 = {
    name: "Dembele",
    club: "PSG",
    league: "Ligue 1",
    nationality: "France"
};
for (let i=0; i<player1.length; i++){
  for (let j=0; j<player2.length; j++){
  if (player1.club === player2.club) count++;
  if (player1.league === player2.league) count++;
  if (player1.nationality === player2.nationality) count++;
  

  }

}
}






























































































// Write your function here:
function calculateChemistry(player1, player2) {
    let counter = 0
        
        if(player1.club===player2.club){
          counter++
        }
        
        if(player1.nationality===player2.nationality){
          counter++
        
        }
        
        if(player1.league===player2.league){
          counter++
        }
  console.log(counter);
  
}

calculateChemistry()