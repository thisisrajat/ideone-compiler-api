<!--
    *
    * GITHUB: rajatbjain
    *
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Compiler</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

  <script type='text/javascript'>
    function showResult()
    {
      var code  = document.getElementById('code').value;
      var input = document.getElementById('input').value;

      if (code != '') {
        var xmlhttp;
        if (window.XMLHttpRequest) {
          xmlhttp = new XMLHttpRequest();
        } else {
          document.getElementById('result').innerHTML = 'HERE IS AN ERROR!';
        }

        xmlhttp.onreadystatechange = function() {
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('result').innerHTML = xmlhttp.responseText;
          }
        }

        xmlhttp.open('GET', 'ideone.php?code=' + encodeURIComponent(code) + '&input=' + encodeURIComponent(input), true);
        xmlhttp.send();
      }

    }
  </script>
</head>

<body>
  <div id='coding_area'>
    <table border='0'>
      <tr>
        <td>
          <label for='code'>Your code:</label>
        </td>

        <td>
          <textarea id='code' rows='30' cols='80'>
#include <iostream>

using namespace std;

int main(int argc, char **argv)
{
  std::cout << "Hello, user and world!";
  return 0;
}


          </textarea>
        </td>
      </tr>

      <tr>
        <td>
          <label for='input'>Input</label>
        </td>

        <td>
          <textarea id='input' rows='10' cols='80'>
          </textarea>
        </td>
      </tr>

      <tr>
        <td colspan='2' style='text-align: center'>
          <button name='submit' onClick="showResult()">Submit</button>
        </td>
      </tr>
    </table>
  </div>

  <div id='result'>
  </div>

</body>

</html>

