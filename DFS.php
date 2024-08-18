<?php
// DFS function
function dfs($graph, $start, &$visited = []) {
    // Mark the current node as visited
    $visited[$start] = true;
    echo $start . " ";

    // Recur for all the vertices adjacent to this vertex
    foreach ($graph[$start] as $neighbor) {
        if (!isset($visited[$neighbor])) {
            dfs($graph, $neighbor, $visited);
        }
    }
}

// Example usage:

// Define a graph using an adjacency list
$graph = [
    'A' => ['B', 'C'],
    'B' => ['D', 'E'],
    'C' => ['F'],
    'D' => [],
    'E' => ['F'],
    'F' => []
];

// Start DFS from vertex 'A'
echo "Depth-First Search starting from vertex A:\n";
dfs($graph, 'A');

?>
