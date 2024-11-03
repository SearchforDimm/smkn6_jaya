<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy and Terms of Service</title>
    <link href="<?= base_url('assets/assets_lsp/css/child/homepage.css') ?>" rel="stylesheet" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f9f9f9;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 2rem;
            color: #3a57e8;
        }

        header p {
            font-size: 1rem;
            color: #666;
        }

        section {
            margin-bottom: 30px;
        }

        section h2 {
            font-size: 1.8rem;
            color: #3a57e8;
            margin-bottom: 10px;
        }

        section h3 {
            font-size: 1.2rem;
            color: #333;
            margin-top: 15px;
        }

        section p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 15px;
        }

        footer {
            text-align: center;
            padding: 20px 0;
            border-top: 1px solid #ddd;
            color: #666;
        }

        footer p {
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <nav class="navbar fixed-top navbar-expandr">
        <div class="nav-wrapper container-fw ">
            <div class="logo-nav">
                <img src="<?= base_url('assets/dist/img/logo.png') ?>" alt="logo-img" />
                <p class="logo-text">LSP SMKN 6 JAKARTA</p>
            </div>
            <div class="menu-nav">
                <a href="<?= base_url() ?>" class="nav-link">Beranda</a>
            </div>
            <div class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    <div class="container">
        <header>
            <h1>Privacy Policy & Terms of Service</h1>
            <p>This page outlines our Privacy Policy and Terms of Service for certification activities licensed by Badan Nasional Sertifikasi Profesi (BNSP).</p>
        </header>

        <section id="privacy-policy">
            <h2>Privacy Policy</h2>
            <p>We are committed to protecting the privacy and confidentiality of all participants in our certification programs. The following outlines our privacy practices:</p>

            <h3>1. Information Collection</h3>
            <p>We collect information from certification candidates necessary for the assessment and issuance of certificates. This includes personal information such as name, contact information, education background, and any other information required by BNSP standards.</p>

            <h3>2. Information Usage</h3>
            <p>The information collected is used solely for certification purposes, including verification of candidate identity, qualification assessments, and issuance of certificates. We do not share your information with third parties, except as required by BNSP or as permitted by law.</p>

            <h3>3. Data Protection</h3>
            <p>We employ technical and administrative safeguards to protect your personal information from unauthorized access, alteration, or disclosure.</p>

            <h3>4. Candidate Rights</h3>
            <p>Candidates have the right to access, modify, or request deletion of their personal data in accordance with applicable data protection laws. Requests can be submitted through our contact page.</p>
        </section>

        <section id="terms-of-service">
            <h2>Terms of Service</h2>
            <p>By participating in our certification activities, you agree to abide by the following terms of service:</p>

            <h3>1. Eligibility</h3>
            <p>Certification is open to individuals who meet the qualification requirements as set by our institution and the BNSP. Candidates must provide accurate and current information during the registration process.</p>

            <h3>2. Certification Process</h3>
            <p>The certification process involves the submission of required documents, assessments, and adherence to professional standards. Non-compliance may result in disqualification or revocation of certification.</p>

            <h3>3. Code of Conduct</h3>
            <p>Certified individuals must uphold the integrity and standards of the certification. Any form of misconduct or violation may lead to disciplinary action, including revocation of the certificate.</p>

            <h3>4. Limitation of Liability</h3>
            <p>Our institution is not liable for any direct, indirect, incidental, or consequential damages arising from participation in the certification program. Candidates agree to use the certification services at their own risk.</p>
        </section>

        <footer>
            <p>&copy; 2024 LSP SMKN 6 Jakarta. All rights reserved.</p>
        </footer>
    </div>
    <script type="text/javascript">
        function toggleMenu() {
            const menu = document.querySelector('.menu-nav');
            const hamburger = document.querySelector('.hamburger');
            menu.classList.toggle('active');
            hamburger.classList.toggle('active');
        }
    </script>
</body>

</html>