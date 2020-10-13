
// Check if User Agent is IE 11.
if (navigator.appName.indexOf("Internet Explorer")!=-1 || navigator.userAgent.match(/Trident.*rv[ :]*11\./)){

  // Get localstorage object
  const ie11TimeToDieClosed = localStorage.getItem("ie11TimeToDieClosed");
  const pastDate = localStorage.getItem("date");

  // Get todays date
  const today = new Date().toJSON().slice(0,10).replace(/-/g,'/');

  if (ie11TimeToDieClosed === "yes" && today === pastDate) {
    document.getElementById("ie--box").style.display = "none";
  } 
  else {
    document.getElementById("ie--box").style.display = "block";
  }

} 

function closeBanner() {
  const ie11TimeToDieClosed = localStorage.getItem('ie11TimeToDieClosed');
  document.getElementById("ie--box").style.display = "none";
  localStorage.setItem("ie11TimeToDieClosed", "yes");
  localStorage.setItem("date", today);
}
