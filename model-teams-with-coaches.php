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

function selectCoachesByTeam($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT coach_id, coach_name, coach_position, team_location, team_name FROM coach c JOIN team t on t.team_id=c.team_id Where c.team_id=?;");
        $stmt->bind_param("i", $tid);
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

function insertCoachByTeam($coach_name, $coach_position, $team_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `coach` (`coach_name`, `coach_position`, `team_id`) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $coach_name, $coach_position, $team_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    } 
}

function updateCoachByTeam($tID, $cName, $cPosition) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `coach` set `coach_name` = ?, `coach_position` = ?, 'team_id' = ?");
        $stmt->bind_param("ssi", $cName, $cPosition, $tID);
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
