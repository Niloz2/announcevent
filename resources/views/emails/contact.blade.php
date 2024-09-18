<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
    <style>
        /* General styles for the email body */
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4;
            padding: 0;
            margin: 0;
        }

        /* Container to wrap the content and provide padding */
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin: 10px 0;
        }

        /* Label styling for strong elements */
        strong {
            color: #333;
            font-size: 16px;
        }

        /* Styling for the key/value pairs (Name, Email, Subject, etc.) */
        .key-value {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .key-value:last-child {
            border-bottom: none;
        }

        /* Footer note */
        .footer {
            text-align: center;
            color: #777;
            font-size: 12px;
            margin-top: 20px;
        }

        /* Responsive design for smaller devices */
        @media only screen and (max-width: 600px) {
            .email-container {
                padding: 15px;
            }

            h2 {
                font-size: 20px;
            }

            p, strong {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>Contact Form Submission</h2>

        <!-- Displaying the submitted data in a clean way -->
        <div class="key-value">
            <strong>Name:</strong>
            <span>{{ $data['name'] }}</span>
        </div>

        <div class="key-value">
            <strong>Email:</strong>
            <span>{{ $data['email'] }}</span>
        </div>

        <div class="key-value">
            <strong>Phone:</strong>
            <span>{{ $data['phone'] }}</span>
        </div>

        <div class="key-value">
            <strong>Subject:</strong>
            <span>{{ $data['subject'] }}</span>
        </div>

        <div class="key-value">
            <strong>Message:</strong>
        </div>
        <p>{{ $data['message'] }}</p>

        <!-- Footer information -->
        <div class="footer">
            <p>This email was sent via the contact form on your website.</p>
        </div>
    </div>
</body>
</html>
