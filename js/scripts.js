function init() {
  let json = {};
  let html = '';
  let jsonContainer = document.getElementById('jsonContainer');
  // let allFields = jsonContainer.querySelectorAll('.json-row');

  // allFields.forEach(key => {
  //   json += key.querySelector('.json-key').innerText + ' -----  '
  // });

  // console.log(allFields);
  // console.log('-------------------');
  // console.log(json);
  document.getElementById('uploadFile').addEventListener('click', () => {
    document.getElementById('inputJSON').click();
  });

  var filename = "";
  document.getElementById('inputJSON').onchange = function (evt) {
    try {
      let files = evt.target.files;
      
      filename = files[0].name;
      
      if (!files.length) {
        alert('No file selected!');
        return;
      }
      let file = files[0];
      let reader = new FileReader();
      const self = this;
      reader.onload = (event) => {
        json = JSON.parse(event.target.result);
        json = Object.entries(json);
        for (const key of json) {
          html += '<div class="json-row"><p class="json-key">' + key[0] + ':</p> ' + '  <input type="text" value="' + key[1] + '" name="' + key[0] + '"/></div>';
        }
        jsonContainer.innerHTML = html;
      };
      reader.readAsText(file);
    } catch (err) {
      console.error(err);
    }
  }

  var outputJSON = {};
  document.getElementById('downloadFile').addEventListener('click', (e) => {
    e.preventDefault(e);
    var jsonRow = document.querySelectorAll('.json-row');

    outputJSON = "{";
    jsonRow.forEach((row, i) => {
      
      outputJSON += '"';
      outputJSON += row.querySelector('input').getAttribute("name");
      outputJSON += '":"';
      outputJSON += row.querySelector('input').value;
      console.log('length: ' + jsonRow.length);
      console.log('number: ' + i);
      
      if (jsonRow.length === (i + 1)) outputJSON += '"';
      else outputJSON += '",';
    });
    outputJSON += "}";
    download(filename, outputJSON);
  });
}

function download(filename, text) {
  var element = document.createElement('a');
  element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
  element.setAttribute('download', filename);

  element.style.display = 'none';
  document.body.appendChild(element);

  element.click();

  document.body.removeChild(element);
}