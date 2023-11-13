<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name, team_location, division_id FROM `team`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertTeam($dID, $tName, $tLocation) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `team` (`division_id`, `team_name`, `team_location`) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $dID, $tName, $tLocation);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTeam($dID, $tName, $tLocation, $tID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `team` set `division_id` = ?, `team_name` = ?, `team_location` = ? where team_id = ?");
        $stmt->bind_param("issi", $dID, $tName, $tLocation, $tID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteTeam($tID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from team where team_id = ?");
        $stmt->bind_param("i", $tID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
