# -*- coding: utf-8 -*-
import conection_bot
import markup_function
import urllib
import general_function

data_language_uk, data_language_id = conection_bot.getDataCsv()
bot = conection_bot.conectToBot()

data_language_uk.set_index("id", inplace = True)
data_language_id.set_index("id", inplace = True)

global default_languange, state
default_languange = data_language_id
state = []


@bot.callback_query_handler(func=lambda call: True)
def handle_query(call):
  global default_languange, state 
  if call.data == 'language_id':
    default_languange = data_language_id
    state = general_function.update_value_state(call.message.chat.id, state, 'None')
    send_welcome(call.message)
  elif call.data == 'language_uk':
    default_languange = data_language_uk
    state = general_function.update_value_state(call.message.chat.id, state, 'None')
    send_welcome(call.message)
  elif call.data == 'change_language':
    state = general_function.update_value_state(call.message.chat.id, state, 'check_language')
    send_welcome(call.message)

@bot.message_handler(commands=['start'], func=lambda message: True)
def send_welcome(message):
  global state

  status = general_function.get_state(message.chat.id, state)
  if status == False :
    state.append([message.chat.id, 'check_language'])

  stateNow = general_function.get_value_state(message.chat.id, state)
  
  cek_user = general_function.get_username(message.chat.id)
  if stateNow[1] == 'check_language':
    language_markup = markup_function.markup_change_Language()
    messageText = str(default_languange.loc[201]['text']).replace("\\n", "\n")
    bot.send_message(message.chat.id, messageText, 
                     reply_markup=language_markup)
  elif cek_user == '':
    messageText = str(default_languange.loc[1]['text']).replace("\\n", "\n")
    bot.send_message(message.chat.id, messageText, 
                     reply_markup=markup_function.markup_reply())
    state = general_function.update_value_state(message.chat.id, state, 'Main_Check')
  elif cek_user == True:
    menu_markup = markup_function.markup_menu(default_languange)
    messageText = str(default_languange.loc[2]['text']).replace("\\n", "\n")
    bot.send_message(message.chat.id, messageText, 
                     reply_markup=menu_markup)

@bot.message_handler(func=lambda message: True)
def echo_message(message):
    global state

    status = general_function.get_state(message.chat.id, state)
    if status == False :
      state.append([message.chat.id, 'check_language'])

    stateNow = general_function.get_value_state(message.chat.id, state)

    if stateNow[1] == 'Main_Check':
      cek_user = general_function.get_username(message.chat.id)
      if cek_user == '':
        result = general_function.set_username(message.text, message.chat.id)
        if result == False:
          messageText = str(default_languange.loc[72]['text']).replace("\\n", "\n")
          bot.send_message(message.chat.id, messageText)
          state = general_function.update_value_state(message.chat.id, state, 'Main')
          send_welcome(message=message)
        else :
          state = general_function.update_value_state(message.chat.id, state, 'Main')
          send_welcome(message=message)
      else:
        state = general_function.update_value_state(message.chat.id, state, 'Main')
        send_welcome(message=message)
    elif stateNow[1] == 'Tes':
      print('tes')
bot.polling()