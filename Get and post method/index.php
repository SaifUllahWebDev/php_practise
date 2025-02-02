<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Input Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            max-width: 500px;
        }
        label {
            font-weight: bold;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <h2>Multi-Input Form</h2>
    <form action="submit.php" method="post">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male"> <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female"> <label for="female">Female</label>

        <label for="skills">Skills:</label>
        <input type="checkbox" id="html" name="skills[]" value="HTML"> <label for="html">HTML</label>
        <input type="checkbox" id="css" name="skills[]" value="CSS"> <label for="css">CSS</label>
        <input type="checkbox" id="js" name="skills[]" value="JavaScript"> <label for="js">JavaScript</label>
        <br>
        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="usa">USA</option>
            <option value="uk">UK</option>
            <option value="pakistan">Pakistan</option>
            <option value="india">India</option>
        </select>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" placeholder="Enter your message"></textarea>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
