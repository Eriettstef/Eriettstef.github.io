
<html>
<head>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.title = "Villa Price Calculator";
        });
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap');

        body {
            font-family: 'Nunito', sans-serif;
            background-color: #848484;
            margin: 0;
            padding: 20px;
        }
        
        h1 {
            color: #00005f;
            text-align: center;
        }
        
        .calculator-form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #b4e6ff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px#0b2270;
            transform-style: preserve-3d;
            perspective: 1000px;
        }
        
        .calculator-form label {
            display: block;
            margin-top: 19px;
            margin-bottom: 8px;
            color: #000000;
        }
        
        .calculator-form input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #CCCCCC;
            transition: border-color 0.3s ease-in-out;
        }
        
        .calculator-form input[type="text"]:focus {
            outline: none;
            border-color: #0b04df;
        }
        
        .calculator-form button {
            display: block;
            margin: 0 auto;
            margin-top: 26px;
            background-color: #0b2270;
            color: #FFFFFF;
            border: none;
            padding: 8px 20px;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        
        .calculator-form button:hover {
            background-color: #dfaf00;
        }
        
        .result {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
            transform: translateZ(30px);
        }
    </style>
    <script>
        function calculatePrice() {
            var pweek = parseFloat(document.getElementById('pweek').value);
            var days = parseInt(document.getElementById('days').value);
            var VAT = parseFloat(document.getElementById('VAT').value);
            
            var pday = pweek / 7;
            var pstay = pday * days;
            var pVAT = (pstay * VAT) / 100;
            var final = pstay + pVAT;
        
            document.getElementById('result').innerHTML = "The final price for " + days + " days is " + final.toFixed(2) + " €";
        }
    </script>
</head>
<body>
    <div class="calculator-form">
        <h1>Villa Price Calculator</h1>
        <label for="pweek"> Please write the p/week price of the villa:</label>
        <input type="text" id="pweek">
        
        <label for="days">How many days will the client stay?</label>
        <input type="text" id="days">
        
        <label for="VAT">Please write the VAT percentage (only the number):</label>
        <input type="text" id="VAT">
        
        <button onclick="calculatePrice()">Calculate</button>
        
        <p id="result" class="result"></p>
    </div>
</body>
</html>
