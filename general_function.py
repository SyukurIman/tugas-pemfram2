import pandas as pd
dataAdmin = []

def get_username(id):
  for val in dataAdmin :
    if val[0] == id:
        return True
  return ''
    
def set_username(data_user, chat_id):
  data_admin_csv = pd.read_csv("dataAdmin.csv")
  data_admin_csv.set_index("id", inplace = True)

  for data in data_admin_csv.index:
    print(data, str(data_user))
    if data == str(data_user):
      print('append')
      dataAdmin.append([chat_id, data_user])
      return True
  return False