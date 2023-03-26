# -*- coding: utf-8 -*-
import telebot
import pandas as pd

TOKEN = '6147252599:AAHEXQZNmrKGIjNgkyOMzuEWjw5ObkJtCeo'

def conectToBot():
  tb = telebot.TeleBot(TOKEN)
  return tb

def getDataCsv():
  data_language_uk = pd.read_csv("inggris_language.csv", 
                                 error_bad_lines=False, encoding='utf-8')
  data_language_id = pd.read_csv("indonesia_language.csv", 
                                 error_bad_lines=False)
  return data_language_uk, data_language_id