<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <!-- Link to your CSS file -->
    <link href="{{ asset('css/adminPanel.css') }}" rel="stylesheet">
    <!-- fontawsome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <div class="admin-panel">
        <!-- Header content goes here -->
        <header>
          <h1>Admin Panel</h1><hr>
        </header>
        <div class="body">
          <div class="left-panel">
            <!-- Navigation bar -->
            <nav>
              <ul>
                <div class="nav-box">
                    <li><a href="#">Dashboard</a></li>
                </div>
                <div class="nav-box">
                    <li><a href="#">Categories</a></li>
                </div>
                <div class="nav-box">
                    <li><a href="#">Books</a></li>
                </div>
                <div class="nav-box">
                    <li><a href="#">Authors</a></li>
                </div>
                <div class="nav-box">
                    <li><a href="#">Orders</a></li>
                </div>
                <div class="nav-box">
                    <li><a href="#">Setting</a></li>
                </div>
              </ul>
            </nav>
          </div>
          <div class="right-panel">

          </div>
        </div>
      </div>

      {{-- javascript --}}
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
