<?php
$response = $modx->discuss2->runProcessor('thread/delete', $hook->getValues());

if ($response->isError()) {
    return $response->getMessage();
}
$obj = $response->getObject();
$modx->sendRedirect($modx->discuss2->makeUrl($obj['parent']));