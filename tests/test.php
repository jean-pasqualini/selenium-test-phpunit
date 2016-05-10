<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://www.laposte.fr/particulier");
  }

  public function testMyTestCase()
  {
    $this->open("/particulier/outils/calculateur-de-tarif");
    $this->setSpeed(5000);
    for ($second = 0; ; $second++) {
        if ($second >= 60) $this->fail("timeout");
        try {
            if ($this->isElementPresent("link=Démarrer")) break;
        } catch (Exception $e) {}
        sleep(1);
    }

    $this->click("link=Démarrer");
    for ($second = 0; ; $second++) {
        if ($second >= 60) $this->fail("timeout");
        try {
            if ($this->isElementPresent("link=Choisir")) break;
        } catch (Exception $e) {}
        sleep(1);
    }

    $this->click("link=Choisir");
    for ($second = 0; ; $second++) {
        if ($second >= 60) $this->fail("timeout");
        try {
            if ($this->isElementPresent("link=Choisir")) break;
        } catch (Exception $e) {}
        sleep(1);
    }

    $this->click("link=Choisir");
    for ($second = 0; ; $second++) {
        if ($second >= 60) $this->fail("timeout");
        try {
            if ($this->isElementPresent("xpath=(//a[contains(text(),'Choisir')])[2]")) break;
        } catch (Exception $e) {}
        sleep(1);
    }

    $this->click("xpath=(//a[contains(text(),'Choisir')])[2]");
    for ($second = 0; ; $second++) {
        if ($second >= 60) $this->fail("timeout");
        try {
            if ($this->isElementPresent("link=Non")) break;
        } catch (Exception $e) {}
        sleep(1);
    }

    $this->click("link=Non");
    for ($second = 0; ; $second++) {
        if ($second >= 60) $this->fail("timeout");
        try {
            if ($this->isElementPresent("link=Choisir")) break;
        } catch (Exception $e) {}
        sleep(1);
    }

    $this->click("link=Choisir");
    for ($second = 0; ; $second++) {
        if ($second >= 60) $this->fail("timeout");
        try {
            if ($this->isElementPresent("link=Nouveau calcul")) break;
        } catch (Exception $e) {}
        sleep(1);
    }

    $this->captureEntirePageScreenshot("/home/prestataire/lol/monfichier.png", "");
  }
}
?>
