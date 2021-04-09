<?php

Mage::loadClassByFileName('controller_core_admin');


class Controller_Media extends Controller_Core_Admin
{

    public function __construct()
    {
        parent::__construct();
    }

    public function gridAction()
    {

        $gridBlock = Mage::getBlock("Block_CustomerGroup_Grid")->setProductMedia();
        $layout = $this->getLayout();
        $layout->setTemplate("View/core/layout/one_column.php");
        $layout->getChild("Content")->addChild($gridBlock, 'Grid');
        $this->renderLayout();
    }

    public function saveAction()
    {

        try 
        {
            if (isset($_FILES['image'])) {
                $file_name = $_FILES['image']['name'];

                $file_tmp = $_FILES['image']['tmp_name'];
                $file_type = $_FILES['image']['type'];

                $tmp = explode('.', $file_name);

                $file_ext = strtolower(end($tmp));

                $extensions = array("jpeg", "jpg", "png");

                if (in_array($file_ext, $extensions) === false) {
                    throw new Exception("extension not allowed, please choose a JPEG or PNG file.");
                }

                $dir = './Skin/admin/images/' . $this->getRequest()->getGet('id');
                


                if (!file_exists($dir) && !is_dir($dir)) {
                    mkdir($dir);
                }

                if (move_uploaded_file($file_tmp, "{$dir}/" . $file_name)) {
                    //rename("./Skin/admin/images/.{$file_name}", "./Skin/admin/images/.{$key}");
                   $media = Mage::getModel("Model_Media");
                   $media->productId = $this->getRequest()->getGet('id');
                   $media->path = $file_name;
                   
                    if (!$media->save()) {
                        throw new Exception("Image Uploading Fail", 1);
                    }
                    $this->getMessage()->setSuccess("File Uploaded Successfully");
                }
            }
        } catch (Exception $e) {
            //print_r("ERROR");
            $this->getMessage()->setFailure($e->getMessage());
        }
        $this->redirect('form', 'product', null, false);
    }

    public function checkAction()
    {
        try {

            if (!$this->getRequest()->getGet('id')) {
                $this->redirect('grid', 'product', null, true);
            }

            if (array_key_exists('update', $this->getRequest()->getPost())) {
                $imageData = $this->getRequest()->getPost('image');
               
                $small = "";
                $thumb = "";
                $base = "";

                if (array_key_exists('small', $imageData)) {
                    $small = $imageData['small'];
                    unset($imageData['small']);
                }
                if (array_key_exists('thumb', $imageData)) {
                    $thumb = $imageData['thumb'];
                    unset($imageData['thumb']);
                }
                if (array_key_exists('base', $imageData)) {
                    $base = $imageData['base'];
                    unset($imageData['base']);
                }

                foreach ($imageData as $key => $value) {

                    if (array_key_exists('remove', $value)) {
                        
                        unset($value['remove']);
                    }

                    if ($key == $small) {
                        $value['small'] = 1;
                    }

                    if ($key == $base) {
                        $value['base'] = 1;
                    }

                    if ($key == $thumb) {
                        $value['thumb'] = 1;
                    }

                    if (!array_key_exists('base', $value)) {
                        $value['base'] = 0;
                    }
                    if (!array_key_exists('small', $value)) {
                        $value['small'] = 0;
                    }
                    if (!array_key_exists('thumb', $value)) {
                        $value['thumb'] = 0;
                    }

                    if (!array_key_exists('gallery', $value)) {
                        $value['gallery'] = 0;
                    } else {
                        $value['gallery'] = 1;
                    }

                    unset($value['imageType']);

                    $values = array_values($value);
                    $fields = array_keys($value);
                    $final = null;

                    for ($i = 0; $i < count($fields); $i++) {
                        if ($fields[$i] == $key) {
                            $id = $values[$i];
                            continue;
                        }
                        $final = $final . "`" . $fields[$i] . "`='" . $values[$i] . "',";
                    }
                    $final = rtrim($final, ",");

                    $query = "UPDATE `media` SET {$final} WHERE `mediaId` = '{$key}'";
                    
                    $update = Mage::getModel('Model_Media');
                    if ($update->update($query)) {
                        $this->getMessage()->setSuccess("Update Changes Successfully !!");
                    }
                }
            } else {
                $keys = [];

                $imageData = $this->getRequest()->getPost('image');
                if (array_key_exists('base', $imageData)) {
                    unset($imageData['base']);
                }
                if (array_key_exists('small', $imageData)) {
                    unset($imageData['small']);
                }
                if (array_key_exists('thumb', $imageData)) {
                    unset($imageData['thumb']);
                }

                foreach ($imageData as $key => $value) {
                    if (array_key_exists('remove', $value)) {
                        $keys[] = $key;
                    }
                }

               $media = Mage::getModel('Model_Media');
                $query = "SELECT path FROM `media` WHERE `mediaId` IN (" . implode(',', $keys) . ")";

                
                $filenames =$media->fetchAll($query);
                $id = $this->getRequest()->getGet('id');
                foreach ($filenames as $key => $value) {
                    
                    unlink(getcwd()."\Skin\admin\images\\{$id}\\{$value->path}");
                }

                $query = "DELETE FROM `media` WHERE `mediaId` IN (" . implode(',', $keys) . ")";
               
                if ($media->delete($query)) {
                    $this->getMessage()->setSuccess("Product Images Delete For Product !!");
                } else {
                    throw new Exception("Unable To Delete Product Image !!", 1);
                    //$this->getMessage()->setSuccess("Unable To Delete Product Image !!");
                }
            }
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }
        $this->redirect('form', 'product', null, false);
    }
}
