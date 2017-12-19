<?php

class Reservations_test extends TestCase
{
    public function test_index()
    {
        $output = $this->request('GET', 'Reservations/index');
        $this->assertContains('<h2>Reservation management</h2>', $output);
    }

    public function test_method_404()
    {
        $this->request('GET', 'Reservations/method_not_exist');
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