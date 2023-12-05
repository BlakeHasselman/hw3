<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_id, player_name, player_position, player_jersey, player_height, player_weight, team_id FROM player");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPlayer($tID, $pName, $pPosition, $pJersey, $pHeight, $pWeight) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `player` (`team_id`, `player_name`, `player_position`, `player_jersey`, `player_height`, `player_weight`) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ississ", $tID, $pName, $pPosition, $pJersey, $pHeight, $pWeight);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePlayer($tID, $pName, $pPosition, $pJersey, $pHeight, $pWeight, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `player` set `team_id` = ?, `player_name` = ?, `player_position` = ?, `player_jersey` = ?, `player_height` = ?, `player_weight` = ? where player_id = ?");
        $stmt->bind_param("ississi", $tID, $pName, $pPosition, $pJersey, $pHeight, $pWeight, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlayer($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from player where player_id = ?");
        $stmt->bind_param("i", $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
