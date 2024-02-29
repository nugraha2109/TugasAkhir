<?php
class lampu 
{
    private $warnas = ['merah','kuning','hijau'];
    private $index = 0;
    public function ambilwarna()
    {
        $warna = $this->warnas[$this->index];
        $this->index = ($this->index+1) % count($this->warnas);
        return $warna; 
    }
}
$lampu = new lampu();
for($i = 0; $i < 4; $i++)
{
    print $lampu->ambilwarna();
};
?>