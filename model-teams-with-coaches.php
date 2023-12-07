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

function selectCoachesByTeam($tID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT coach_id, coach_name, coach_position, team_location, team_name, c.team_id FROM coach c JOIN team t on t.team_id=c.team_id Where c.team_id=?;");
        $stmt->bind_param("i", $tID);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    } 
}

function selectTeamsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name FROM `team` order by team_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectCoachesForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT coach_id, coach_name FROM `coach` order by coach_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertCoachByTeam($tID, $cName, $cPosition, $cID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `coach` (`coach_name`, `coach_position`, `team_id`, `coach_id`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssii", $cName, $cPosition, $tID, $cID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCoachByTeam($tID, $cName, $cPosition, $cID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `coach` set `coach_name` = ?, `coach_position` = ?, `team_id` = ? where coach_id = ?");
        $stmt->bind_param("ssii", $cName, $cPosition, $tID, $cID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCoachByTeam($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `coach` where `coach_id` = ?");
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
