document.querySelector("select").addEventListener('change', function (e) {
  window.location.href = 'pages?file='+e.target.value;
})