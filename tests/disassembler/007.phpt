--TEST--
Test disassembler cast
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
require_once('disassembler.inc');

run_disassembler_test(function(int $arg) : float {
	return (float) $arg;
}, [2]);
?>
--EXPECT--
float(2)
