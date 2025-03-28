<?php
session_start();
// if(!isset($_SESSION['email'])) {
//     header("Location: login.php");
//     exit;
// }

$cn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($cn, "project");

$email = $_SESSION['email'];
$query = "SELECT * FROM complaints WHERE user_email = ? ORDER BY complaint_date DESC";
$stmt = $cn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Complaints - KLINZY</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .complaints-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }
        .complaint-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .complaint-header {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        .complaint-status {
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 14px;
        }
        .status-pending {
            background: #fff3cd;
            color: #856404;
        }
        .status-resolved {
            background: #d4edda;
            color: #155724;
        }
        .complaint-date {
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Include your website header/navigation here -->
    
    <div class="complaints-container">
        <h2>My Complaints</h2>
        
        <?php if($result->num_rows > 0): ?>
            <?php while($complaint = $result->fetch_assoc()): ?>
                <div class="complaint-card">
                    <div class="complaint-header">
                        <h3><?php echo htmlspecialchars($complaint['complaint_title']); ?></h3>
                        <span class="complaint-status <?php echo $complaint['status'] == 'Pending' ? 'status-pending' : 'status-resolved'; ?>">
                            <?php echo htmlspecialchars($complaint['status']); ?>
                        </span>
                    </div>
                    <div class="complaint-date">
                        Submitted on: <?php echo date('F j, Y', strtotime($complaint['complaint_date'])); ?>
                    </div>
                    <p><?php echo htmlspecialchars($complaint['complaint_description']); ?></p>
                    <?php if($complaint['admin_response']): ?>
                        <div class="admin-response">
                            <strong>Admin Response:</strong>
                            <p><?php echo htmlspecialchars($complaint['admin_response']); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="no-complaints">
                <p>You haven't submitted any complaints yet.</p>
            </div>
        <?php endif; ?>
    </div>

    <!-- Include your website footer here -->
</body>
</html>