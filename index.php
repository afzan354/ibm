<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Berat Badan Ideal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            width: 100%;
            max-width: 500px;
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .header {
            background: linear-gradient(135deg, #5f72bd 0%, #9b23ea 100%);
            padding: 30px 20px;
            text-align: center;
            color: white;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .header p {
            font-size: 16px;
            opacity: 0.9;
        }

        .form-container {
            padding: 40px 30px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
            color: #333;
            font-size: 16px;
        }

        .gender-options {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }

        .gender-option {
            flex: 1;
            position: relative;
        }

        .gender-option input {
            position: absolute;
            opacity: 0;
        }

        .gender-option label {
            display: block;
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .gender-option input:checked + label {
            background: #5f72bd;
            color: white;
            border-color: #5f72bd;
            transform: scale(1.05);
        }

        .input-group {
            position: relative;
        }

        .input-group input {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .input-group input:focus {
            outline: none;
            border-color: #5f72bd;
            background: white;
            box-shadow: 0 0 0 3px rgba(95, 114, 189, 0.2);
        }

        .input-group .unit {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            font-weight: 500;
        }

        .calculate-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #5f72bd 0%, #9b23ea 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
            box-shadow: 0 4px 15px rgba(95, 114, 189, 0.3);
        }

        .calculate-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(95, 114, 189, 0.4);
        }

        .calculate-btn:active {
            transform: translateY(0);
        }

        .result-container {
            padding: 0 30px 30px;
            display: none;
            animation: slideUp 0.5s ease-out;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .result-card {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            border-radius: 15px;
            padding: 25px;
            color: white;
            text-align: center;
            box-shadow: 0 10px 30px rgba(245, 87, 108, 0.3);
        }

        .result-title {
            font-size: 18px;
            margin-bottom: 15px;
            opacity: 0.9;
        }

        .result-value {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .result-info {
            font-size: 16px;
            opacity: 0.9;
            margin-bottom: 20px;
        }

        .reset-btn {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid white;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .reset-btn:hover {
            background: white;
            color: #f5576c;
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: #6c757d;
            font-size: 14px;
        }

        .footer a {
            color: #5f72bd;
            text-decoration: none;
            font-weight: 500;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .header h1 {
                font-size: 24px;
            }
            
            .form-container {
                padding: 30px 20px;
            }
            
            .result-value {
                font-size: 36px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-weight-scale"></i> Kalkulator Berat Ideal</h1>
            <p>Hitung berat badan ideal Anda dengan rumus Broca</p>
        </div>
        
        <div class="form-container">
            <form id="ideal-weight-form">
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="gender-options">
                        <div class="gender-option">
                            <input type="radio" id="male" name="gender" value="pria" checked>
                            <label for="male"><i class="fas fa-mars"></i> Pria</label>
                        </div>
                        <div class="gender-option">
                            <input type="radio" id="female" name="gender" value="wanita">
                            <label for="female"><i class="fas fa-venus"></i> Wanita</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="height">Tinggi Badan</label>
                    <div class="input-group">
                        <input type="number" id="height" placeholder="Masukkan tinggi badan" min="100" max="250" required>
                        <span class="unit">cm</span>
                    </div>
                </div>
                
                <button type="submit" class="calculate-btn">
                    <i class="fas fa-calculator"></i> Hitung Berat Ideal
                </button>
            </form>
        </div>
        
        <div class="result-container" id="result-container">
            <div class="result-card">
                <div class="result-title">Berat Badan Ideal Anda</div>
                <div class="result-value" id="result-value">0 kg</div>
                <div class="result-info" id="result-info">Berdasarkan rumus Broca</div>
                <button class="reset-btn" id="reset-btn">
                    <i class="fas fa-redo"></i> Hitung Lagi
                </button>
            </div>
        </div>
        
        <div class="footer">
            <p>Dibuat dengan <i class="fas fa-heart" style="color: #e74c3c;"></i> untuk kesehatan Anda</p>
            <p>Informasi kesehatan: <a href="#">Konsultasikan dengan ahli gizi</a></p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('ideal-weight-form');
            const resultContainer = document.getElementById('result-container');
            const resultValue = document.getElementById('result-value');
            const resultInfo = document.getElementById('result-info');
            const resetBtn = document.getElementById('reset-btn');
            
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form values
                const gender = document.querySelector('input[name="gender"]:checked').value;
                const height = parseFloat(document.getElementById('height').value);
                
                // Calculate ideal weight
                let idealWeight;
                if (gender === 'pria') {
                    idealWeight = (height - 100) - ((height - 100) * 0.10);
                } else {
                    idealWeight = (height - 100) - ((height - 100) * 0.15);
                }
                
                // Display result
                resultValue.textContent = `${idealWeight.toFixed(1)} kg`;
                resultInfo.textContent = `Untuk ${gender === 'pria' ? 'Pria' : 'Wanita'} dengan tinggi ${height} cm`;
                
                // Show result container
                form.parentElement.style.display = 'none';
                resultContainer.style.display = 'block';
            });
            
            resetBtn.addEventListener('click', function() {
                form.reset();
                form.parentElement.style.display = 'block';
                resultContainer.style.display = 'none';
                document.getElementById('height').focus();
            });
        });
    </script>
</body>
</html>