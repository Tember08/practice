<?php include('header.php'); ?> <!-- Include the header -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Aj Resort - Home</title>
    <link rel="stylesheet" href="home.css"> <!-- Link to external CSS file -->

</head>

<body>
    <!-- Home Page Content -->
    <section class="home">
        <div class="background-image">
            <h1>Welcome to Secret Aj Resort</h1>
        </div>

        <div class="accommodations">
            <h2>Our Accommodations</h2>
            <!-- Accommodation cards (unchanged) -->
            <div class="accommodation-card">
                <img src="../secretaj/images/room.jpg" alt="Accommodation 1" class="accommodation-image">
                <div class="accommodation-info">
                    <h3>Room</h3>
                    <p>Enjoy comfort and relaxation in our well-equipped rooms with cozy beds and modern amenities.</p>
                    <button onclick="window.location.href='accommodation_details.php?id=1'">View Details</button>
                </div>
            </div>
            <div class="accommodation-card">
                <img src="../secretaj/images/cottage.jpg" alt="Accommodation 2" class="accommodation-image">
                <div class="accommodation-info">
                    <h3>Cottage</h3>
                    <p>Stay in our cozy cottages with spacious living areas and shared outdoor spaces, perfect for a relaxing and comfortable retreat.</p>
                    <button onclick="window.location.href='accommodation_details.php?id=2'">View Details</button>
                </div>
            </div>
            <div class="accommodation-card">
                <img src="../secretaj/images/tent.jpg" alt="Accommodation 3" class="accommodation-image">
                <div class="accommodation-info">
                    <h3>Tents</h3>
                    <p>Experience nature in luxury with our cozy, well-furnished tents for a unique outdoor stay.</p>
                    <button onclick="window.location.href='accommodation_details.php?id=3'">View Details</button>
                </div>
            </div>
        </div>

        <div class="resort-rules">
            <h2>Resort Rules</h2>
            <ul>
                <li>No smoking inside the rooms.</li>
                <li>Pets are not allowed on the property.</li>
                <li>Check-in time is from 2:00 PM, and check-out time is 12:00 PM.</li>
                <li>Respect the privacy and comfort of other guests.</li>
            </ul>
        </div>

        <!-- Feedback Submission Form -->
        <div class="feedback-form">
            <h2>Leave Your Feedback</h2>
            <form action="submit_feedback.php" method="POST">
                <label for="rating">Rating:</label>
                <select name="rating" id="rating" required>
                    <option value="1">★☆☆☆☆ (1/5)</option>
                    <option value="2">★★☆☆☆ (2/5)</option>
                    <option value="3">★★★☆☆ (3/5)</option>
                    <option value="4">★★★★☆ (4/5)</option>
                    <option value="5">★★★★★ (5/5)</option>
                </select>

                <label for="comment">Your Comment:</label>
                <textarea name="comment" id="comment" rows="4" required placeholder="Write your comment here..."></textarea>

                <button type="submit">Submit Feedback</button>
            </form>
        </div>


        <!-- Customer Feedback Section -->
        <div class="feedbacks">
            <h2>Customer Feedback</h2>
            <div class="feedback-card">
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span> (4/5)
                </div>
                <p>"A wonderful stay! The service was excellent, and the views were breathtaking!"</p>
            </div>
            <div class="feedback-card">
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span> (5/5)
                </div>
                <p>"Absolutely fantastic! The staff was friendly, and the food was amazing."</p>
            </div>
            <div class="feedback-card">
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span> (5/5)
                </div>
                <p>"A perfect retreat! I loved every moment of my stay at Secret Aj Resort."</p>
            </div>
        </div>


        <div class="location">
            <h2>Find Us</h2>
            <p>Secret Aj Resort is located at <strong>Tuling, Patag Opol Misamis Oriental, Opol, Philippines, 9016</strong>. Enjoy the serenity and breathtaking views of our exclusive getaway.</p>
            <p>
                <a href="https://maps.app.goo.gl/yDK9bFzi11JrXyi76" target="_blank" class="location-link">
                    Open Aj Resort Location in Google Maps
                </a>
            </p>
        </div>


        <div class="about-us">
            <h2>About Us</h2>
            <p>Secret Aj Resort is a tranquil getaway nestled in nature's beauty. Our goal is to provide exceptional service and unforgettable experiences. Come and enjoy the best of luxury, comfort, and natural beauty!</p>
        </div>
    </section>
</body>

</html>