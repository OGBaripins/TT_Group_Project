
About The API:

    Read Function:
    
    Every product type has its own read method. Any of the tables form the database can be read directly with this API.
    Nothing has to be specified in the request body!

    Computer Table - localhost/{group_project_folder}/php_api/api/product/ComputerRead (GET)
    Phone Table - localhost/{group_project_folder}/php_api/api/product/PhoneRead (GET)
    Photo_tech Table - localhost/{group_project_folder}/php_api/api/product/Photo_techRead (GET)
    Sports Table - localhost/{group_project_folder}/php_api/api/product/SportsRead (GET)
    Tools Table - localhost/{group_project_folder}/php_api/api/product/ToolsRead (GET)
    TV_audio Table - localhost/{group_project_folder}/php_api/api/product/TV_audioRead (GET)

    Get single record functionality:

    It is possible to get a single record from the database by providing the SKU code as a body in the request.

    Get single record endpoint - localhost/{group_project_folder}/php_api/api/product/get_single

    Sample body:
    {
        "sku":"LEC12345"
    }

    Delete Function:

    Any item in the database can be deleted using a single endpoint.
    When deleting an item the user has to specify the SKU code. 
    Each SKU code is unique and provides an easy way to delete records

    Delete endpoint - localhost/{group_project_folder}/php_api/api/product/delete (GET)

    Sample body:
    {
        "sku":"LEC12345"
    }

    Create Function:

    An item can be created to the database by using a single endpoint like in a delete function.
    When creating an item the user has to specify exact values as shown in the sample body (Except the ID which is A.I)

    Sample body:
    {
        "name":"test_prod_tv_audio",
        "sku":"LEC12345",
        "price":"100",
        "quantity":"57",
        "image_path":"test_path"
    }
