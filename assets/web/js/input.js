document.getElementById('default').addEventListener('#default', function (e) {
console.log("wded");
    e.target.value = e.target.value.replace(/[^0-1]/g, '').replace(/(.{4})/g, '$1 ').trim();
  });