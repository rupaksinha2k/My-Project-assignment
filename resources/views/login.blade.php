<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <style type="text/css">
        body,td,th{
            color: #000000;
        }
        body{
            background-color: #F0F0F0;
 
        }
        .style1
        {
            font-family: arial, helvetica, sans-serif;
            font-size: 14px;
            padding: 12px;
            line-height: 25px;
            border-radius: 4px;
            text-decoration: none;
        }
 
        .style2
        {
            font-family: arial, helvetica, sans-serif;
            font-size: 17px;
            padding: 12px;
            line-height: 25px;
            border-radius: 4px;
            text-decoration: none;
 
        }
 
    </style>
 
 
</head>
<body>
 
 
<div class="container">
    <table width="100%" height="100%" border="0" cellspacing="0" align="center">
        <tr>
            <td align="center" valign="middle">
                <table class="table-bordered" width="350" border="0" cellpadding="3" cellspacing="3" bgcolor="#FFFFFF">
              
                  
                          <tr>
                              <td height="25" colspan="2" align="left" valign="middle" bgcolor="#FF9900" class="style2">
                                  <div align="center">
                                      <strong>Login</strong>
                                  </div>
                              </td>
                          </tr>
 
                        <tr>
 
                            <div id="err" style="color: red">
                                @if(session()->has('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                            </div>
 
                        </tr>
                        <form  action="{{ route('login.check') }}" method="POST">
                    @csrf
 
                        <tr>
                            <td width="118" align="left" valign="middle" class="style1">Username</td>
                            <td width="118" align="left" valign="middle" class="style1">
                                <input type="text" class="form-control" size="10px" id="name" placeholder="Username" name="name">
                            </td>
 
                        </tr>
 
                        <tr>
                            <td width="118" align="left" valign="middle" class="style1">Phone</td>
                            <td width="118" align="left" valign="middle" class="style1">
                                <input type="password" class="form-control" size="10px" id="phone" placeholder="phone number" name="phone">
                            </td>
 
                        </tr>
 
                        
                        <tr>
                            <td colspan="2" align="right" valign="middle" class="style1">
                                <button type="submit" class="btn btn-primary" >Sign In</button>
                            </td>
                        </tr>
                    </form>
                </table>
 
            </td>
        </tr>
    </table>
</div>
</body>
</html>