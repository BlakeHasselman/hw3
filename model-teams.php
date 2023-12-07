<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name, team_location, team_founded, division_id FROM `team`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertTeam($dID, $tName, $tLocation, $tFounded) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `team` (`division_id`, `team_name`, `team_location`, `team_founded`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("issi", $dID, $tName, $tLocation, $tFounded);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTeam($dID, $tName, $tLocation, $tFounded, $tID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `team` set `division_id` = ?, `team_name` = ?, `team_location` = ?, `team_founded` = ? where `team_id` = ?");
        $stmt->bind_param("issii", $dID, $tName, $tLocation, $tFounded, $tID);
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
