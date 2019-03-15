defmodule Squarediff do 

  def of(numbers) do
    square_of_sum(numbers) - sum_of_squares(numbers)
  end
  defp sum_of_squares(numbers) do
    numbers
    |> Stream.map(&(&1*&1))
    |> Enum.sum()    
  end  

  defp square_of_sum(numbers) do
    sum = Enum.sum(numbers)
    sum * sum
  end
end
