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


function insertCoachesByTeam($coach_id, $coach_name, $coach_position, $team_location, $team_name) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `coach` (`coach_name`, `coach_position`) VALUES (?, ?, ?)");
        $stmt->bind_param("ss", $cName, $cPosition);
        $stmt = $conn->prepare("INSERT INTO `team` (`team_location`, `team_name`) VALUES (?, ?)");
        $stmt->bind_param("ss", $tLocation, $tName);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    } 
}

function updateCoachByTeam($tID, $cName, $cPosition, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `coach` set `coach_name` = ?, `coach_position` = ?");
        $stmt->bind_param("ss", $cName, $cPosition);
         $stmt = $conn->prepare("update `team` set `team_location` = ?, `team_name` = ?");
        $stmt->bind_param("ss", $tLocation, $tName);
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
