<?php
function selectCoaches() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select coach_name, count(t.divison_id) num_div from coach c join team t on c.team_id=t.team_id join division d on d.division_id=t.division_id group by coach_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
