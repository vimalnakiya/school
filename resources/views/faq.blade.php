<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f9;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .faq {
            background-color: #fff;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            cursor: pointer;
        }
        
        .faq h2 {
            font-size: 1.2rem;
        }
        
        .faq p {
            display: none;
            padding-top: 10px;
        }
        
        .faq.active p {
            display: block;
        }
    </style>
</head>

<body>
    <h1>Frequently Asked Questions (FAQ)</h1>

    <div class="faq-container">
        <div class="faq">
            <h2>What is this website about?</h2>
            <p>This website provides information on various topics to help users find answers to common questions.</p>
        </div>
        <div class="faq">
            <h2>How can I contact support?</h2>
            <p>You can contact support by clicking the 'Contact Us' link at the bottom of the page or emailing support@example.com.</p>
        </div>
        <div class="faq">
            <h2>Do I need to create an account?</h2>
            <p>No, you can browse most of the content without an account. However, creating an account provides personalized features.</p>
        </div>
        <div class="faq">
            <h2>Is my information secure?</h2>
            <p>Yes, we prioritize user privacy and security. Our site uses advanced encryption protocols to protect your information.</p>
        </div>
    </div>

    <script>
        const faqs = document.querySelectorAll('.faq');

        faqs.forEach(faq => {
            faq.addEventListener('click', () => {
                faq.classList.toggle('active');
            });
        });
    </script>
</body>

</html>
