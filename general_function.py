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
    if data == str(data_user):
      dataAdmin.append([chat_id, data_user])
      return True
  return False

def get_state(id, state):
  for val in state :
    if val[0] == id:
        return True
  return False

def get_value_state(id, state):
  for val in state :
    if val[0] == id:
        return val
  return False

def update_value_state(id, state, value):
  index = 0
  for val in state :
    if val[0] == id:
        state[index][1] = value
    elif index < len(state) :
       state[index] = val
    index += 1
  return state