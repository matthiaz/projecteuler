defmodule Palindrome do 
  import Integer

  def largest_of_three() do
    100..999
    |> Stream.flat_map(fn x -> expand(x) end) 
    |> Stream.uniq
    |> Enum.sort(&(&1 >= &2))
    |> Stream.map(&(int_to_string(&1)))
    |> Stream.filter(&(&1==Enum.reverse(&1)))
    #|> Stream.take(1)
    |> Enum.take(1)
    
  end  
  defp int_to_string(intNumber) do
    Integer.to_charlist(intNumber)
    #    |> String.to_string
  end

  defp expand(number) do
    100..999
    |> Stream.map(&(&1*number))
    |> Enum.to_list
  end
end
