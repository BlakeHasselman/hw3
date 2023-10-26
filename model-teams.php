<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name, team_location FROM `team`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertTeam($tID, $cName, $cPosition) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `coach` (`team_id`, `coach_name`, `coach_position`) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $tID, $cName, $cPosition);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTeam($tID, $cName, $cPosition, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `coach` set `team_id` = ?, `coach_name` = ?, `coach_position` = ? where coach_id = ?");
        $stmt->bind_param("issi", $tID, $cName, $cPosition, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteTeam($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from coach where coach_id = ?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
