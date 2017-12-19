<?php

class Manage_patients_test extends TestCase
{
    public function test_index()
    {
        $output = $this->request('GET', 'Manage_patients/index');
        $this->assertContains('<h2>Manage Patients</h2>', $output);
    }

    public function test_method_404()
    {
        $this->request('GET', 'Manage_patients/method_not_exist');
        $this->assertResponseCode(404);
    }

    public function test_APPPATH()
    {
        $actual = realpath(APPPATH);
        $expected = realpath(__DIR__ . '/../..');
        $this->assertEquals(
            $expected,
            $actual,
            'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
        );
    }
}