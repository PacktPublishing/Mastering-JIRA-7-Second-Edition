<?php

define('JIRA_URL', 'http://localhost:2990/jira');
define('USERNAME', 'admin');
define('PASSWORD', 'admin');

//The function that is making the REST call using Curl Protocol

function post_to($resource, $data) {
  $curlname=CURLOPT_POST;
  $curlvalue=1;
  $jdata = json_encode($data);
  $ch = curl_init();
  curl_setopt_array($ch, array(
  $curlname => $curlvalue,
  CURLOPT_URL => JIRA_URL . '/rest/api/latest/' . $resource,
  CURLOPT_USERPWD => USERNAME . ':' . PASSWORD,
  CURLOPT_POSTFIELDS => $jdata,
  CURLOPT_HTTPHEADER => array('Content-type: application/json'),
  CURLOPT_RETURNTRANSFER => true
  ));
  $result = curl_exec($ch);
  curl_close($ch);
  return json_decode($result);
}

function create_issue($issue) {
  return post_to('issue', $issue);
}

//The issue details
$new_issue = array(
'fields' => array(
'project' => array('key' => 'GEN'),
'summary' => 'Test via REST',
'description' => 'Description of issue goes here.',
'issuetype' => array('name' => 'Task')
)
);

//Call the function to create the issue
$result = create_issue($new_issue);

//Print the output
if (property_exists($result, 'errors')) {
  echo "Error(s) creating issue:\n";
  var_dump($result);
} else {print_r($result);
  echo "New issue created at " . JIRA_URL ."/browse/{$result->key}\n";
}

?>
