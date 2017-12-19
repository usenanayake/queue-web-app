<?php

class Messenger_test extends TestCase
{
//    public function test_index()
//    {
//        $output = $this->request('GET', 'Messenger/index');
//        $this->assertContains('<h2>Messenger</h2>', $output);
//    }

    public function test_method_404()
    {
        $this->request('GET', 'Messenger/method_not_exist');
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