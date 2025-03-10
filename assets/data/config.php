<?php 

// Profile used 
$resume_view = "https://dhananjay09892.github.io/resume/Resume.pdf";
$resume_download = "https://raw.githubusercontent.com/dhananjay09892/resume/main/Resume.pdf";
$first_name = "Dhananjay";
$last_name = "Patel";
$designation = "Software Engineer";
$services = array(
    array(
        "title" => "Web Development",
        "icon" => "fa fa-laptop",
        "description" => "Developing responsive websites and web applications using the latest technologies and best practices.",
    ),
    array(
        "title" => "API Development",
        "icon" => "fa fa-code",
        "description" => "Creating robust and scalable APIs to support web and mobile applications.",
    ),
    array(
        "title" => "Software Solutions",
        "icon" => "fa fa-cogs",
        "description" => "Delivering impactful software solutions tailored to meet specific business needs and objectives.",
    ),
);
// $about = "As a software developer currently employed in a company based in Ahmedabad, India, I am actively seeking an opportunity that can enhance my programming skills, logical aptitude, and attention to detail. I aspire to develop and refine my software development abilities further, and I am keen to explore avenues that can aid me in achieving this objective.";
$about = "Results-oriented, motivated Software Developer proficient in API creation, Game development, Data scraping, Web
development, and plugin/theme editing, among others. Programming languages used: Python, PHP, Node.js, and SQL. Strong
skills in DSA ensure efficient and optimized solutions. Critical thinking in problem-solving is very structured and analytical.";
// $about = "A dedicated computer science graduate with a passion for agile development and API creation. Equipped with strong skills in Python, PHP, React, Node.js, and SQL, focused on delivering impactful software solutions and contributing to innovative projects.";
$birthDate = "08/09/1992";
$address = "New Jersey, NJ 07726, United States";
$phone = "+ 1 (732)-558-4709";
$phone_link = "tel:+ 1 (732)-558-4709";
$email = "dhananjay09892@gmail.com";
$email_link = "mailto:dhananjay09892@gmail.com";
$website = "https://pateldhananjay.com/";
$meta_title = $first_name . " " . $last_name . " | " . $designation;
$meta_description = $first_name . " " . $last_name . " | " . $designation;
$link_linkedin = "https://www.linkedin.com/in/dhananjaypatel09/";
$link_github = "https://github.com/dhananjay09892";
$link_leetcode = "https://leetcode.com/dhananjay09892/";
$link_hackerrank = "https://www.hackerrank.com/profile/dhananjay09892";



// not used
$cv = "https://pateldhananjay.com/Dhananjay_Patel_Resume.pdf";
$profile = array(
    "first_name" => $first_name,
    "last_name" => $last_name,
    "designation" => $designation,
    "services" => $services,
    "about" => $about,
    "birthDate" => $birthDate,
    "address" => $address,
    "phone" => $phone,
    "phone_link" => $phone_link,
    "email" => $email,
    "email_link" => $email_link,
    "website" => $website,
    "meta_title" => $first_name. " " . $last_name . " | " . $designation,
    "meta_description" => $first_name. " " . $last_name . " | " . $designation,
    "link_linkedin" => $link_linkedin,
    "link_github" => $link_github,
    "link_leetcode" => $link_leetcode,
    "link_hackerrank" =>  $link_hackerrank,
    "cv" => $cv,
);

// Skills
$skills = array(
    "Programming Languages" => array("Python", "PHP", "C#", "Java", "C", "C++", "VB.NET", "HTML", "CSS", "SQL", "JavaScript"),
    "Libraries/Frameworks" => array("JavaScript", "CodeIgniter 4", "WordPress", "Express.js", "React.js", "Node.js", "jQuery", "Bootstrap", "AJAX", "JSON", "XML", "RESTful APIs"),
    "Tools / Platforms" => array("Visual Studio", "VS Code", "PyCharm", "Unity 3D", "Postman", "Git", "MySQL Workbench", "XAMPP"),
    "Databases" => array("MySQL", "postgreSQL", "SQLite", "MongoDB"),
);

// Experience
$experience = array(
    array(
        "title" => "Graduate Teaching Assistant",
        "link" => "https://www.sacredheart.edu/",
        "company" => "Sacred Heart University",
        "location" => "Fairfield County, Connecticut, United States",
        "date" => "Apr 2024 - Dec 2024",
        "description" => array(
            // "title" => "As a dedicated Graduate Teaching Assistant, I provide support in Advanced Data Structures, VB.NET, and Statistics for Data Science. My role focuses on enhancing student learning through personalized assistance and resource development.",
            "title" => "As a dedicated Graduate Teaching Assistant, I provide support in Advanced Data Structures, VB.NET, and Statistics for Data Science. My role focuses on enhancing student learning through personalized assistance and resource development.",
            "points" => array(
                "Developed comprehensive project examples to improve student understanding.",
                "Provided one-on-one guidance to troubleshoot and resolve coding issues.",
                "Collaborated with faculty to ensure smooth software setup in the university environment.",
                "Created user-friendly documentation for ongoing and future student use.",
                "Contributed to course material development and supported course management, including software updates and maintenance.",
            ),
        ),
        "short" => "Graduate Teaching Assistant for Data Structures, VB.NET, and statistics for data science. Developed comprehensive project examples to aid student learning and provided one-on-one support to troubleshoot and resolve coding errors. Collaborated with faculty to ensure seamless software setup within the university’s environment. Created detailed, user-friendly documentation for ongoing and future student use, enhancing the learning resources available. Contributed to course material development and supported the professor in managing course logistics, including software maintenance and updates.",
        "short_points" =>array(
            "Mentored 100+ students in Data Structures, VB.NET, and Statistics, providing guidance and support to enhance their understanding and performance.",
            "Developed 25+ projects, solving complex challenges in VB.NET and C++ to ensure seamless functionality and quality.",
            "Delivered instruction on algorithms and data structures, emphasizing practical implementation and problem-solving
            proficiency.",
        )
    ),
    array(
        "title" => "Senior Software Developer",
        "company" => "Web Strataegic",
        "location" => "Ahmedabad, India",
        "date" => "July 2019 - July 2023",
        "description" => array(
            "title" => "As a Senior Software Developer in a small company, I focused on delivering high-quality software solutions, specializing in APIs, websites, and software applications.",
            "points" => array(
                "Led development and debugging efforts to ensure robust, scalable solutions.",
                "Focused on coding for APIs, websites, and software applications.",
                "Oversaw integration of backend systems with frontend interfaces for seamless functionality.",
                "Managed the complete software lifecycle from design to deployment.",
                "Mentored junior developers, providing guidance and fostering skill development.",
                "Collaborated with clients and departments to successfully achieve project objectives.",
            ),
        ),
        "short" => "As a Senior Software Developer in a small company, focused on coding for APIs, websites, and software applications. Led development and debugging efforts to ensure robust and scalable solutions. Oversaw the integration of backend systems with frontend interfaces, mentored junior developers, and managed the full software lifecycle. Collaborated with clients and other departments to achieve project goals.",
    ),
    array(
        "title" => "Software Developer and Co-Founder",
        "company" => "CBLT Pvt. Ltd",
        "location" => "Ahmedabad, India",
        "date" => "Jan 2017 - Jun 2019",
        "description" => array(
            "title" => "As the Founder of a startup for online cotton bales trading, I led the development of the entire application and website from the ground up, ensuring a seamless user experience.",
            "points" => array(
                "Developed the full application and website from scratch for online cotton bales trading.",
                "Led backend development and API creation to support smooth operations.",
                "Contributed to frontend development and provided design input for a user-friendly interface.",
                "Ensured project success through end-to-end technical oversight and problem-solving.",
                "Balanced development tasks with business strategy to drive startup growth.",
            ),
        ),
        "short" => "Founded a startup for online trading of cotton bales, developing the entire application and website from scratch. Handled backend development and API creation, while also providing support for frontend development and design concepts, contributing to the project's overall success.",
    ),
    array(
        "title" => "Software Developer",
        "company" => "Navdurga Suppliers",
        "location" => "Ahmedabad, India",
        "date" => "Jun 2016 - Jan 2017",
        "description" => array(
            "title" => "As a Software Developer and Quality Engineer at Navdurga Suppliers, a sand supply company in Gujarat, I enhanced software systems and data management by delivering tailored solutions for business operations.",
            "points" => array(
                "Developed in-house software solutions for billing, accounting, and customer records.",
                "Integrated government portals to streamline regulatory compliance and operations.",
                "Enhanced data management processes through troubleshooting and optimization.",
                "Implemented scalable, robust coding practices to improve software efficiency.",
                "Contributed to quality assurance, ensuring the reliability and functionality of all software systems.",
            ),
        ),
        "short" => "At Navdurga Suppliers, a Sand Supply company in Gujarat, served as a Software Developer and Quality Engineer, enhancing software and data management by troubleshooting processes, integrating government portals, and developing in-house solutions for billing, accounting, and customer records using robust, scalable coding practices.",
    ),
);

// Education

$education = array(
    array(
        "degree" => "Master in Computer Science",
        "university" => "Sacred Heart University",
        "location" => "Fairfield, Connecticut",
        "major" => "Computer Science",
        "date" => "2023-2024",
        "gpa" => "4.00",
    ),
    array(
        "degree" => "Bachelors in Computer Application",
        "university" => "Jaipur National University",
        "location" => "Jaipur",
        "major" => "Computer Application",
        "date" => "2012-2016",
        "gpa" => "3.17",
    ),
);

// Projects
// Catch Butterflies Game (Role: Game Developer)
// "As a Game Developer, I created an engaging game called 'Catch Butterflies,' focused on delivering an immersive and enjoyable player experience."
    // Developed a game where players catch butterflies while avoiding enemies.
    // Implemented game mechanics using multiple C# scripts, including a counter system.
    // Integrated music and sound effects to enhance the game's immersive experience.
    // Designed the main character to enable dynamic player interactions.
    // Ensured the gameplay was both challenging and enjoyable for players.

// VP Security CRM (Role: Backend Developer)
// "As a Backend Developer for VP Security CRM, I focused on building and optimizing the backend of a web-based CRM system for mobile applications."
    // Developed backend infrastructure using PHP for a web-based CRM system.
    // Created APIs for task management and user interactions.
    // Designed and implemented the database, incorporating features such as notifications and progress tracking.
    // Ensured robust data security and optimized server performance for reliability.
    // Collaborated with frontend developers to ensure seamless integration.
    // Provided comprehensive documentation for future maintenance and updates.

// CBLT Mobile Application (Role: Backend Developer)
// As a Backend Developer for the CBLT Mobile Application, I played a key role in developing a robust backend system to support a seamless user experience."

    // Developed scalable and robust APIs using PHP for a mobile application.
    // Managed database design and implementation, ensuring efficient data storage and retrieval.
    // Integrated third-party services and implemented security protocols to enhance application functionality and safety.
    // Optimized server performance to provide a smooth and reliable user experience.
    // Collaborated closely with frontend developers for seamless integration.
    // Provided thorough documentation to support ongoing maintenance and future development.

$projects = array(
    array(
        "title" => "Catch Butterflies Game",
        "role" => "Game Developer",
        "description" => array(
            "title" => "As a Game Developer, I created an engaging game called 'Catch Butterflies,' focused on delivering an immersive and enjoyable player experience.",
            "points" => array(
                "Developed a game where players catch butterflies while avoiding enemies.",
                "Implemented game mechanics using multiple C# scripts, including a counter system.",
                "Integrated music and sound effects to enhance the game's immersive experience.",
                "Designed the main character to enable dynamic player interactions.",
                "Ensured the gameplay was both challenging and enjoyable for players.",
            ),
        "short" => "Created an engaging game called 'Catch Butterflies,' focused on delivering an immersive and enjoyable player experience. Developed game mechanics using C# scripts, integrated music and sound effects, and designed the main character for dynamic player interactions.",
        ),
    ),
    array(
        "title" => "VP Security CRM",
        "role" => "Backend Developer",
        "description" => array(
            "title" => "As a Backend Developer for VP Security CRM, I focused on building and optimizing the backend of a web-based CRM system for mobile applications.",
            "points" => array(
                "Developed backend infrastructure using PHP for a web-based CRM system.",
                "Created APIs for task management and user interactions.",
                "Designed and implemented the database, incorporating features such as notifications and progress tracking.",
                "Ensured robust data security and optimized server performance for reliability.",
                "Collaborated with frontend developers to ensure seamless integration.",
                "Provided comprehensive documentation for future maintenance and updates.",
            ),
        ),
        "short" => "Focused on building and optimizing the backend of a web-based CRM system for mobile applications. Developed backend infrastructure using PHP, created APIs for task management and user interactions, and designed the database with features like notifications and progress tracking.",
    ),
    array(
        "title" => "CBLT Mobile Application",
        "role" => "Backend Developer",
        "description" => array(
            "title" => "As a Backend Developer for the CBLT Mobile Application, I played a key role in developing a robust backend system to support a seamless user experience.",
            "points" => array(
                "Developed scalable and robust APIs using PHP for a mobile application.",
                "Managed database design and implementation, ensuring efficient data storage and retrieval.",
                "Integrated third-party services and implemented security protocols to enhance application functionality and safety.",
                "Optimized server performance to provide a smooth and reliable user experience.",
                "Collaborated closely with frontend developers for seamless integration.",
                "Provided thorough documentation to support ongoing maintenance and future development.",
            ),
        ),
        "short" => "Played a key role in developing a robust backend system to support a seamless user experience for the CBLT Mobile Application. Developed scalable APIs using PHP, managed database design and implementation, and optimized server performance for reliability.",
    ),
);