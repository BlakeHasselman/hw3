<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT t.team_id, stats_id, team_name, team_location, team_founded, ss.wins, ss.losses, ss.conference_rank, ss.playoff_status, division_id FROM `team` t join season_stats ss on ss.team_id=t.team_id");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertTeam($dID, $tName, $tLocation, $tFounded, $ssWins, $ssLosses, $ssRank, $ssPlayoff) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `team` (`division_id`, `team_name`, `team_location`, `team_founded`) VALUES (?, ?, ?)");
        $stmt->bind_param("issi", $dID, $tName, $tLocation, $tFounded);
        $success = $stmt->execute();
        $teamId = $conn->insert_id;
        $stmt2 = $conn->prepare("insert into `season_stats` (`wins`, `losses`, `conference_rank`, `playoff_status`) VALUES (?, ?, ?, ?)");
        $stmt2->bind_param("iiis", $ssWins, $ssLosses, $ssRank, $ssPlayoff);
        $stmt2->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTeam($dID, $tName, $tLocation, $tFounded, $tID, $ssWins, $ssLosses, $ssRank, $ssPlayoff, $ssID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `team` set `division_id` = ?, `team_name` = ?, `team_location` = ?, `team_founded` = ? where team_id = ?");
        $stmt->bind_param("issii", $dID, $tName, $tLocation, $tFounded, $tID);
        $success = $stmt->execute();
        $stmt2 = $conn->prepare("update `season_stats` set `wins` = ?, `losses` = ?, `conference_rank` = ?, `playoff_status` = ? where stats_id = ?");
        $stmt2->bind_param("iiisi", $ssWins, $ssLosses, $ssRank, $ssPlayoff, ssID);
        $stmt2->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteTeam($tID, $ssID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from team where team_id = ?");
        $stmt->bind_param("i", $tID);
        $success = $stmt->execute();
        $stmt = $conn->prepare("delete from season_stats where stats_id = ?");
        $stmt->bind_param("i", $sID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
