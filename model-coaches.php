<?php
function selectCoaches() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT coach_id, coach_name, coach_position, coach_start, coach_wins, coach_losses, team_id FROM coach;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertCoach($tID, $cName, $cPosition, $cStart, $cWins, $cLosses) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `coach` (`team_id`, `coach_name`, `coach_position`, `coach_start`, `coach_wins`, `coach_losses`) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issiii", $tID, $cName, $cPosition, $cStart, $cWins, $cLosses);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCoach($tID, $cName, $cPosition, $cStart, $cWins, $cLosses, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `coach` set `team_id` = ?, `coach_name` = ?, `coach_position` = ?, `coach_start` = ?, `coach_wins` = ?, `coach_losses` = ? where coach_id = ?");
        $stmt->bind_param("issiiii", $tID, $cName, $cPosition, $cStart, $cWins, $cLosses, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCoach($cid) {
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
