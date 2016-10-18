<!DOCTYPE html>
<html>
<head>
  <title>math.js | plot</title>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/mathjs/3.5.3/math.min.js"></script>

  <!-- load http://maurizzzio.github.io/function-plot/ -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
  <script src="https://wzrd.in/standalone/function-plot@1.14.0"></script>

  <style>
    input[type=text] {
      width: 300px;
    }
    input {
      padding: 6px;
    }
    body, html, input {
      font-family: sans-serif;
      font-size: 11pt;

    }
    form {
      margin: 20px 0;
    }
  </style>
</head>
<body>

<form id="form">
  <label for="eq">Enter an equation:</label>
  <input type="text" id="eq" value="4 * sin(x) + 5 * cos(x/2)" />
  <input type="submit" value="Draw" />
</form>

<div id="plot"></div>

<p>
 <!--Plot library: <a href="https://github.com/maurizzzio/function-plot">https://github.com/maurizzzio/function-plot</a>-->
</p>

<script>
  function draw() {
    try {
      functionPlot({
        target: '#plot',
        data: [{
          fn: document.getElementById('eq').value,
          sampler: 'builtIn',  // this will make function-plot use the evaluator of math.js
          graphType: 'polyline'
        }]
      });
    }
    catch (err) {
      console.log(err);
      alert(err);
    }
  }

  document.getElementById('form').onsubmit = function (event) {
    event.preventDefault();
    draw();
  };

  draw();
</script>

</body>
</html>