<!-- dashboard.html -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    


    .dashboard-container {
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      z-index: 1;
    }

    h2 {
      margin-top: 0;
    }

    .dashboard-options {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      margin-top: 20px;
    }

    .dashboard-option {
      width: 30%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      cursor: pointer;
      margin: 10px;
      transition: background-color 0.3s ease;
    }

    .dashboard-option:hover {
      background-color: #e0e0e0;
    }

    .itinerary-image {
      width: 100%;
      height: auto;
      border-radius: 5px;
      margin-bottom: 10px;
    }
  </style>
  <title>Bon Voyage - Dashboard</title>
</head>
<body>
   
  <div class="dashboard-container">
    <h2>Welcome to Bon Voyage Travel Agency!</h2>
    

    <div class="dashboard-options">
      <div class="dashboard-option" onclick="viewPackages()">
        <img class="itinerary-image" src="https://media.istockphoto.com/id/146753772/photo/resort-in-cancun-shown-in-the-daytime-from-the-air.jpg?s=2048x2048&w=is&k=20&c=2SF7Vb2driG-vn1dUEwwJDeogsotyIvyTeiTKBUqsh8=" alt="View Packages">
        View Packages
      </div>
      <div class="dashboard-option" onclick="seeItineraries()">
        <img class="itinerary-image" src="https://plus.unsplash.com/premium_photo-1697729438401-fcb4ff66d9a8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="See Our Itineraries">
        See Our Itineraries
      </div>
      <div class="dashboard-option" onclick="planTrip()">
        <img class="itinerary-image" src="https://images.unsplash.com/photo-1516738901171-8eb4fc13bd20?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Plan Your Own Trip With Us">
        Plan Your Own Trip With Us
      </div>
    </div>
    <div id="slideshow-container">

    </div>

  </div>

  <script>


    function viewPackages() {
      // Redirect to view packages page or implement desired functionality
      alert("Redirecting to View Packages page");
    }

    function seeItineraries() {
      // Redirect to see itineraries page or implement desired functionality
      alert("Redirecting to See Our Itineraries page");
    }

    function planTrip() {
      // Redirect to plan trip page or implement desired functionality
      alert("Redirecting to Plan Your Own Trip With Us page");
    }
  </script>
</body>
</html>