<?php
// Example built using TDD
include('../EnhanceTestFramework.php');

class ExampleClass {
	public function AddTwoNumbers($a, $b) {
		return $a + $b;
	}
}

class ExampleTestFixture {
	private $Target;
	
	public function SetUp() {
		$this->Target = Enhance::GetCodeCoverageWrapper('ExampleClass');
	}
	
	public function AddTwoNumbersWith3and2Expect5Test() {
		$result = $this->Target->AddTwoNumbers(3, 2);

		Assert::AreIdentical(5, $result);
	}
	
	public function AddTwoNumbersWith4and2Expect6Test() {
		$result = $this->Target->AddTwoNumbers(4, 2);

		Assert::AreIdentical(6, $result);
	}
}

Enhance::RunTests();
?>

