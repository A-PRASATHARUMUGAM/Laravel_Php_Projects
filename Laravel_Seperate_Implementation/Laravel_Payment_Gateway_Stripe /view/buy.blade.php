<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buy a T-Shirt</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f5f6fa;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .card {
      background: #fff;
      padding: 2.5rem;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      text-align: center;
      width: 350px;
    }

    .card img {
      width: 150px;
      border-radius: 10px;
      margin-bottom: 1rem;
    }

    h1 {
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
      color: #2d3436;
    }

    p.price {
      font-size: 1.2rem;
      color: #636e72;
      margin-bottom: 1.5rem;
    }

    button {
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: white;
      padding: 12px 25px;
      font-size: 1rem;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button:hover {
      background: linear-gradient(135deg, #5a67d8, #6b46c1);
      transform: translateY(-2px);
      box-shadow: 0 5px 10px rgba(102,126,234,0.3);
    }

    footer {
      font-size: 0.9rem;
      color: #a0aec0;
      margin-top: 1.5rem;
    }
  </style>
</head>

<body>
  <div class="card">
    <img src="https://cdn-icons-png.flaticon.com/512/892/892458.png" alt="T-Shirt">
    <h1>Premium Cotton T-Shirt</h1>

        <form action="{{ route('payment.create') }}" method="POST">
            @csrf
            <input type="hidden" name="amount" value="50">
            <button type="submit"
                style="padding:10px 20px; background-color:#5469d4; color:white; border:none; border-radius:4px;">
                Pay ₹50
            </button>
        </form>

    <footer>Secure payment powered by Stripe</footer>
  </div>
</body>
</html>
