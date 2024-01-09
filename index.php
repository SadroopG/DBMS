<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ecf0f1;
        }

        #wrapper {
            min-height: 100vh;
            display: flex;
        }

        #left_panel,
        #right_panel {
            flex: 1;
            padding: 10px;
            box-sizing: border-box;
            transition: all 0.3s;
            overflow-x: hidden;
        }

        #left_panel {
            background-color: #e74c3c;
            width: 250px;
        }

        #right_panel {
            background-color: #2ecc71;
            display: flex;
            flex-direction: column;
            width: 100%; /* Added this line to make #right_panel take 100% width */
        }

        #header {
            background-color: #34495e;
            padding: 10px;
            color: #fff;
            text-align: center;
            font-size: 24px;
        }

        #container {
            flex: 1;
            display: flex;
        }

        #chat_list,
        #text_messages {
            flex: 1;
            padding: 10px;
            box-sizing: border-box;
        }

        #chat_list {
            background-color: #f39c12;
        }

        #text_messages {
            background-color: #1abc9c;
        }

        #collapseBtn,
        #closeBtn {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            text-align: left;
        }
    </style>
</head>
<body>
    <div id="header">WHATSNAPP</div>

    <div id="wrapper">
        <div id="left_panel">
            <button id="collapseBtn" onclick="toggleLeftPanel()">☰ Collapse</button>
            <!-- Add your links for creating groups, viewing profile, and settings here -->
            <ul>
                <li><a href="#">Create Group</a></li>
                <li><a href="#">View Profile</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </div>
        <div id="right_panel">
            <div id="container">
                <div id="chat_list">
                    <h2>Chat List</h2>
                    <p>Number of people in the chat list: <span id="chatCount">0</span></p>
                    <!-- Add dynamic content for chat list here -->
                </div>
                <div id="text_messages">
                    <h2>Text Messages</h2>
                    <!-- Add dynamic content for text messages here -->
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleLeftPanel() {
            var leftPanel = document.getElementById('left_panel');
            var currentWidth = leftPanel.offsetWidth;

            if (currentWidth > 0) {
                leftPanel.style.width = '0'; // Collapse the left panel
            } else {
                leftPanel.style.width = '250px'; // Expand the left panel
            }
        }

        // Example: Update the chat count dynamically
        var chatCount = 10; // Replace with the actual count
        document.getElementById('chatCount').innerText = chatCount;
    </script>
</body>
</html>
