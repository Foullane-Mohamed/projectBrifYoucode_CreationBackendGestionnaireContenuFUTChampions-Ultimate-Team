async function getPlyers() {
  let response = await fetch("data.php")
  let data = await response.json()
  console.log(data);
  
}

getPlyers()

