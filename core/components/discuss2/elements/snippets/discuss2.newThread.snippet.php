<?php
$response = $modx->discuss2->runProcessor('thread/new', $hook->getValues());

if ($response->isError()) {
    return $response->getMessage();
}
$obj = $response->getObject();
//$modx->sendRedirect($modx->discuss2->getLastPostLink($obj['id'], $obj['post_id']));
return true;